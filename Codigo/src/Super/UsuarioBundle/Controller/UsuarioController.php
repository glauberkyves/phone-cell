<?php

namespace Super\UsuarioBundle\Controller;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Controller\CrudController;

class UsuarioController extends CrudController
{
    protected $serviceName = 'service.usuario';

    public function validate(AbstractEntity $entity = null)
    {
        if(!$this->getRequest()->get('perfis')){
            $this->addMessage('usuario_bundle.validators.perfils.validate', 'error');
        }

        return parent::validate($entity);
    }
}
