<?php

namespace Super\UsuarioBundle\Controller;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Super\UsuarioBundle\Service\Perfil;
use Symfony\Component\HttpFoundation\Request;

class SupervisorController extends CrudController
{
    protected $serviceName = 'service.supervisor_usuario';


    public function indexAction(Request $request)
    {
        $this->getCmb();

        return parent::indexAction($request);
    }

    public function createAction(Request $request)
    {
        $this->vars['entity']        = $this->getService('service.usuario')->find($request->get('id'));
        $this->vars['cmbVendedores'] = array();
        $this->vars['vendedores']    = array();

        if ($request->isMethod('post')) {
            $this->getService()->saveVendedores($request);

            $this->addMessage('Operação realizada com sucesso.');
            return $this->redirect($this->generateUrl('super_supervisor_vendedor'));
        }

        foreach ($this->getService('service.usuario_perfil')->findAll() as $value) {
            if ($value->getIdPerfil()->getSgPerfil() == 'ROLE_VENDEDOR'
                && $value->getIdUsuario()->getStAtivo()
                && !$value->getIdUsuario()->getStInterno()
            ) {
                $this->vars['cmbVendedores'][$value->getIdUsuario()->getIdUsuario()] = $value->getIdUsuario()->getIdPessoa()->getNoPessoa();
            }
        }

        foreach ($this->getService('service.supervisor_usuario')->findByIdSupervisor($request->get('id')) as $value) {
            array_push($this->vars['vendedores'], $value->getIdVendedor()->getIdUsuario());
        }

        return $this->render($this->resolveRouteName(), $this->vars);
    }

    public function getCmb()
    {
        $this->vars['cmbStAtivo'] = Dominio::getStAtivo();
        $this->vars['cmbPerfis']  = array();
        $this->vars['perfis']     = array();

        foreach ($this->getService('service.perfil')->findAll() as $perfil) {
            $this->vars['cmbPerfis'][$perfil->getIdPerfil()] = $perfil->getNoPerfil();
        }
    }

}
