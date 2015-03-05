<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\UsuarioBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\CrudService;

class UsuarioPerfil extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\RlUsuarioPerfil';

}