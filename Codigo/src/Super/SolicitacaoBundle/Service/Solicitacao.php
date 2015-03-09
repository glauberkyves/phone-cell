<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\SolicitacaoBundle\Service;

use Base\CrudBundle\Service\CrudService;

class Solicitacao extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbSolicitacao';
}