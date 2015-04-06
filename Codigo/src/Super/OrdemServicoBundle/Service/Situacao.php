<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\OrdemServicoBundle\Service;

use Base\CrudBundle\Service\CrudService;

class Situacao extends CrudService
{
    CONST COLETADA = 1;
    CONST VALIDADA = 2;
    CONST PENDENTE = 3;
    CONST CANCELADA = 4;
    CONST INSTALADA = 5;
    CONST COMISSIONADA = 6;
    CONST REPROVADA = 7;

    protected $entityName = 'Base\BaseBundle\Entity\TbSituacao';
}