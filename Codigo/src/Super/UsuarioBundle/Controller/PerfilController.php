<?php

namespace Super\UsuarioBundle\Controller;

use Base\CrudBundle\Controller\CrudController;
use Super\UsuarioBundle\Service\Perfil;

class PerfilController extends CrudController
{
    /**
     * @var Perfil
     */
    protected $serviceName = 'super_usuario_bundle.perfil';

}
