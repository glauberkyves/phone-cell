<?php

namespace Super\UsuarioBundle\Controller;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends CrudController
{
    protected $serviceName = 'service.usuario';


    public function indexAction(Request $request)
    {
        $this->getCmb();
        return parent::indexAction($request);
    }

    public function createAction(Request $request)
    {
        $this->getCmb();
        return parent::createAction($request);
    }

    public function editAction(Request $request)
    {
        $this->getCmb();
        return parent::editAction($request);
    }

    public function getCmb()
    {
        $this->vars['cmbStAtivo'] = Dominio::getStAtivo();
        $this->vars['cmbPerfis'] = array();

        foreach ($this->getService('service.perfil')->findAll() as $perfil) {
            $this->vars['cmbPerfis'][$perfil->getIdPerfil()] = $perfil->getNoPerfil();
        }
    }

    public function validate(AbstractEntity $entity = null)
    {
        if (!$this->getRequest()->get('perfis')) {
            $this->addMessage('usuario_bundle.validators.perfils.validate', 'error');
        }

        if (!$this->getRequest()->get('idUsuario') && $this->getService()->findOneByNoEmail($this->getRequest()->get('noEmail'))) {
            $this->addMessage('usuario_bundle.validators.email.duplicado', 'error');
        }

        if (!$this->getRequest()->get('idUsuario') && !$this->getRequest()->get('noSenha')) {
            $this->addMessage('usuario_bundle.validators.email.duplicado', 'error');
        }

        return parent::validate($entity);
    }
}
