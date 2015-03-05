<?php

namespace Super\UsuarioBundle\Controller;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class UsuarioController extends CrudController
{
    protected $serviceName = 'service.usuario';

    public function createAction(Request $request)
    {
        $this->vars['cmbStAtivo'] = array('' => 'Selecione', 1 => 'Ativo', 0 => 'Inativo');
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
