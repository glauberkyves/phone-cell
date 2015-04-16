<?php

namespace Super\OrdemServicoBundle\Controller;

use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Super\OrdemServicoBundle\Service\Situacao;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends CrudController
{
    protected $serviceName = 'service.ordem_servico';

    public function indexAction(Request $request, $idSituacao = null)
    {
        $request->query->set('idSituacao', $idSituacao);
        return parent::indexAction($request);
    }

    public function createAction(Request $request, $form = true)
    {
        $this->getCmb();
        $this->setEntities();

        $this->vars['form'] = $form;

        return parent::createAction($request);
    }

    public function editAction(Request $request, $form = true)
    {
        $this->getCmb();
        $this->setEntities();

        $this->vars['form'] = $form;

        return parent::editAction($request);
    }

    public function setEntities()
    {
//        $request         = $this->getRequest()->request;
//        $arrPessoa       = $request->get('pessoa', array());
//        $arrEndereco     = $request->get('endereco', array());
//        $arrOrdemServico = $request->get('ordem', array());

//        $this->vars['idPessoa']       = $this->getService('service.pessoa')->newEntity()->populate($arrPessoa);
//        $this->vars['idEndereco']     = $this->getService('service.endereco')->newEntity()->populate($arrEndereco);
//        $this->vars['idOrdemServico'] = $this->getService('service.ordem_servico')->newEntity()->populate($arrOrdemServico);

        $cpf = $this->getRequest()->query->getDigits('cpf');

        if ($cpf && null === $this->getRequest()->query->get('id', null)) {
            $entityPessoaFisica = $this->getService('service.pessoa_fisica')->findOneByNuCpf($cpf);
            $this->vars['entityPessoa'] = $entityPessoaFisica->getIdPessoa();
        }
    }

    public function CheckCpfAction(Request $request)
    {
        if ($request->query->getAlnum('buscar')) {
            $nuCpf = $request->query->getDigits('nuCpf');
            $entity = $this->getService('service.pessoa_fisica')->findOneByNuCpf($nuCpf);
            $json = array();

            if ($entity) {
                $json['noPessoa'] = $entity->getIdPessoa()->getNoPessoa();
                $json['idPessoa'] = $entity->getIdPessoa()->getIdPessoa();
            }

            return $this->renderJson($json);
        }

        return $this->render($this->resolveRouteName());
    }

    public function getCmb()
    {
        $this->vars['cmbSexo'] = Dominio::getStSexo();
        $this->vars['arrEstado'] = $this->getService('service.estado')->getComboDefault(array(), array('noEstado' => 'asc'));

        $this->vars['arrMunicipio'] = array('' => 'Selecione');
        $this->vars['arrBairro'] = array('' => 'Selecione');
        $this->vars['arrProduto'] = Dominio::getStProduto();

        $this->vars['arrPlano'] = $this->getService('service.plano')->findBy(array(), array('noPlano' => 'asc'));
        $this->vars['arrPacote'] = $this->getService('service.pacote')->findBy(array(), array('noPacote' => 'asc'));
        $this->vars['arrPeriodo'] = Dominio::getPeriodo(true);
        $this->vars['arrSimNao'] = Dominio::getSimNao(true);
        $this->vars['arrTpTerminal'] = Dominio::getTpTerminal();
        $this->vars['arrVelocidade'] = $this->getService('service.velocidade')->getComboDefault(array(), array('idVelocidade' => 'asc'));
        $this->vars['arrTaxaHabilitacao'] = Dominio::getTpTaxaHabilitacao();
        $this->vars['arrFormaPagamento'] = Dominio::getTpFormaPagamento();
        $this->vars['arrFidelizacao'] = Dominio::getTpFidelizacao();
        $this->vars['arrVendedor'] = $this->getService('service.usuario')->getVendedores();

        $request = $this->getRequest();
        if ($request->get('id')) {
            $entity = $this->getService()->find($request->get('id'));

            if ($entity) {
                $arrMunicipio = $this->getService('service.municipio')->getComboDefault(
                    array('idEstado' => $entity->getIdPessoa()->getIdEndereco()->getIdMunicipio()->getIdEstado()->getIdEstado()),
                    array('noMunicipio' => 'asc')
                );

                $this->vars['arrMunicipio'] = array('' => 'Selecione') + $arrMunicipio;

                if ($entity->getIdSituacao()->getIdSituacao() != Situacao::COLETADA) {
                    $this->addMessage('Ordem de serviço já em andamento, não é possível alterar.', 'error');
                    return $this->redirect($request->headers->get('referer'));
                }
            }
        }
    }

//    public function resolveRouteIndex()
//    {
//        if($this->vars['entity']->getIdOrdemServico()){
//            return
//        }
//    }

    public function encaminharAction($idOrdemServico)
    {
        if ($this->getService()->encaminhar($idOrdemServico)) {
            $this->addMessage('Ordem de serviço encaminhada com sucesso');
        } else {
            $this->addMessage('Erro ao encaminhar ordem de serviço', 'error');
        }

        return $this->redirect($this->getRequest()->headers->get('referer'));
    }
}
