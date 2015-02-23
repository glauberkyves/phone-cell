<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\UsuarioBundle\Service;

use Base\CrudBundle\Service\CrudService;

class Usuario extends CrudService
{
    CONST PROVIDER_AUTH = 'main';

    protected $entityName = 'Base\BaseBundle\Entity\TbUsuario';
}