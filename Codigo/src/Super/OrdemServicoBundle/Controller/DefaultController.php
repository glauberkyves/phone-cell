<?php

namespace Super\OrdemServicoBundle\Controller;

use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends CrudController
{
    protected $serviceName = 'service.ordem_servico';

    public function createAction(Request $request, $form = true)
    {
        $this->getCmb();
        $this->setEntities();

        $this->vars['form'] = $form;

        return parent::createAction($request);
    }

    public function setEntities()
    {
        $request         = $this->getRequest()->request;
        $arrPessoa       = $request->get('pessoa', array());
        $arrEndereco     = $request->get('endereco', array());
        $arrOrdemServico = $request->get('ordem', array());

        $this->vars['idPessoa']       = $this->getService('service.pessoa')->newEntity()->populate($arrPessoa);
        $this->vars['idEndereco']     = $this->getService('service.endereco')->newEntity()->populate($arrEndereco);
        $this->vars['idOrdemServico'] = $this->getService('service.ordem_servico')->newEntity()->populate($arrOrdemServico);

        $id = $this->getRequest()->query->getDigits('id');

        if ($id) {
            $this->vars['idPessoa']   = $this->getService('service.pessoa')->find($id)->populate($arrPessoa);
            $this->vars['idEndereco'] = $this->getService('service.endereco')->findOneByIdPessoa($id);
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

        $this->vars['arrPlano']           = $this->getService('service.plano')->findBy(array(), array('noPlano' => 'asc'));
        $this->vars['arrPacote']          = $this->getService('service.pacote')->findBy(array(), array('noPacote' => 'asc'));
        $this->vars['arrPeriodo']         = Dominio::getPeriodo(true);
        $this->vars['arrSimNao']          = Dominio::getSimNao(true);
        $this->vars['arrTpTerminal']      = Dominio::getTpTerminal();
        $this->vars['arrVelocidade']      = $this->getService('service.velocidade')->getComboDefault(array(), array('idVelocidade' => 'asc'));
        $this->vars['arrTaxaHabilitacao'] = Dominio::getTpTaxaHabilitacao();
        $this->vars['arrFormaPagamento']  = Dominio::getTpFormaPagamento();
        $this->vars['arrFidelizacao']     = Dominio::getTpFidelizacao();
        $this->vars['arrVendedor']        = $this->getService('service.usuario')->getVendedores();
    }

    public function filaAction()
    {
        return $this->render($this->resolveRouteName());
    }
}
