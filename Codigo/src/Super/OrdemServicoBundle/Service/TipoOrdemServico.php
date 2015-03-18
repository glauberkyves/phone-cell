<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\OrdemServicoBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\CrudService;

class TipoOrdemServico extends CrudService
{
    CONST OIFIXO = 1;

    protected $entityName = 'Base\BaseBundle\Entity\TbTipoOrdemServico';
}