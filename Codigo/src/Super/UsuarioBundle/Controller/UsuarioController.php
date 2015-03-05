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
        $this->vars['cmbStAtivo'] = Dominio::getStAtivo();

        return parent::indexAction($request);
    }


    public function createAction(Request $request)
    {
        $this->vars['cmbStAtivo'] = Dominio::getStAtivo();
        $this->vars['cmbPerfis'] = array();

        foreach ($this->getService('service.perfil')->findAll() as $perfil) {
            $this->vars['cmbPerfis'][$perfil->getIdPerfil()] = $perfil->getNoPerfil();
        }

        return parent::createAction($request);
    }

    public function validate(AbstractEntity $entity = null)
    {
        if (!$this->getRequest()->get('perfis')) {
            $this->addMessage('usuario_bundle.validators.perfils.validate', 'error');
        }

        return parent::validate($entity);
    }
}
