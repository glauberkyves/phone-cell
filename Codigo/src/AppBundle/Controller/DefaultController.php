<?php

namespace AppBundle\Controller;

use Base\CrudBundle\Controller\CrudController;

class DefaultController extends CrudController
{
    protected $serviceName = 'base_crud.default';

    public function indexAction()
    {
        return $this->render($this->resolveRouteName());
    }
}
