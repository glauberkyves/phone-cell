<?php

namespace Super\OrdemServicoBundle\Controller;

use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Super\OrdemServicoBundle\Service\Situacao;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends CrudController
{
    protected $serviceName = 'service.ordem_servico';

    public function indexAction(Request $request, $idSituacao = null)
    {
        $request->query->set('idSituacao', $idSituacao);
        $request->query->set('idUsuario', $this->getUser()->getIdUsuario());

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

        $this->vars['entityPessoa'] = null;
        $cpf                        = $this->getRequest()->query->getDigits('cpf');

        if ($cpf && null === $this->getRequest()->query->get('id', null)) {
            $entityPessoaFisica = $this->getService('service.pessoa_fisica')->findOneByNuCpf($cpf);

            if ($entityPessoaFisica) {
                $this->vars['entityPessoa'] = $entityPessoaFisica->getIdPessoa();
            }
        }
    }

    public function viewAction(Request $request, $form)
    {
        return $this->editAction($request, $form);
    }

    public function CheckCpfAction(Request $request)
    {
        if ($request->query->getAlnum('buscar')) {
            $nuCpf  = $request->query->getDigits('nuCpf');
            $entity = $this->getService('service.pessoa_fisica')->findOneByNuCpf($nuCpf);
            $json   = array();

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
        $this->vars['cmbSexo']     = Dominio::getStSexo();
        $this->vars['cmbSituacao'] = array(
            ''                        => 'Selecione...',
            Situacao::PENDENTE        => 'Pendente',
            Situacao::CANCELADA       => 'Cancelada',
            Situacao::INSTALADA       => 'Instalada',
            Situacao::REPROVADA       => 'Reprovada',
            Situacao::DESISTENCIA     => 'Desistência',
            Situacao::INADIMPLENTE    => 'Inadimplente',
            Situacao::SEM_VIABILIDADE => 'Sem viabilidade',
        );
        $this->vars['arrEstado']   = $this->getService('service.estado')->getComboDefault(array(), array('noEstado' => 'asc'));

        $this->vars['arrMunicipio'] = array('' => 'Selecione');
        $this->vars['arrBairro']    = array('' => 'Selecione');
        $this->vars['arrProduto']   = Dominio::getStProduto();

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

        $request = $this->getRequest();
        if ($request->get('id')) {
            $entity = $this->getService()->find($request->get('id'));

            if ($entity) {
                $arrMunicipio = $this->getService('service.municipio')->getComboDefault(
                    array('idEstado' => $entity->getIdPessoa()->getIdEndereco()->getIdMunicipio()->getIdEstado()->getIdEstado()),
                    array('noMunicipio' => 'asc')
                );

                $this->vars['arrMunicipio'] = array('' => 'Selecione') + $arrMunicipio;

                $route = $this->getRequest()->get('_route');
                if ($entity->getIdSituacao()->getIdSituacao() != Situacao::COLETADA
                    && ($route == 'super_ordem_servico_oi_fixo_alterar' || $route == 'super_ordem_servico_oi_tv_alterar')
                ) {
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

    public function historicoAction(Request $request)
    {
        $request->query->set('idSituacao', null);

        return $this->indexAction($request);
    }

    public function historicoViewAction(Request $request, $idOrdemServico)
    {
        $entity    = $this->getService()->find($idOrdemServico);
        $historico = $this->getService('service.historico')->findByIdOrdemServico($idOrdemServico);

        return $this->render($this->resolveRouteName(), array('entity' => $entity, 'historicos' => $historico));
    }

    public function anexarAction(Request $request)
    {
        if ($request->request->get('idOrdemServico')) {
            $this->addMessage($this->resolveMessageSuccess());
            $this->getService()->upload();
        } else {
            $this->addMessage('Erro ao anexar fomulário.', 'error');
        }

        return $this->redirect($this->getRequest()->headers->get('referer'));
    }

    public function downloadAction(Request $request, $idOrdemServico)
    {
        $entity = $this->getService()->find($idOrdemServico);

        if (!$entity) {
            $this->addMessage('Erro ao iniciar download.', 'error');

            return $this->redirect($this->getRequest()->headers->get('referer'));
        }

        $rootDir  = $this->getRequest()->server->get('DOCUMENT_ROOT');
        $filename = $rootDir . '/' . $entity->getNoUrl();
        $response = new Response();

        $response->headers->set('Cache-Control', 'private');
        $response->headers->set('Content-type', mime_content_type($filename));
        $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($filename) . '";');
        $response->headers->set('Content-length', filesize($filename));

        $response->sendHeaders();

        return $response->setContent(readfile($filename));
    }

    public function comissionarAction(Request $request)
    {
        if ($request->query->get('idOrdemServico') && $request->query->has('dsObservacao')) {
            $this->getService()->comissionar($request);

            $this->addMessage('Operação realizada com sucesso.');

            return $this->redirect($this->generateUrl('super_ordem_servico_fila_gerente'));
        }

        $entity   = $this->getService()->find($request->get('id'));
        $comissao = $this->getService()->getComissao($entity);

        return $this->render($this->resolveRouteName(), array(
            'entity'   => $entity,
            'comissao' => $comissao
        ));
    }
}

