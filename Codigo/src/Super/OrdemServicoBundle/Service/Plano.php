<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\OrdemServicoBundle\Service;

use Base\CrudBundle\Service\CrudService;

class Plano extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbPlano';
}