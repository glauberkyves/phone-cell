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
    CONST IMPUTADA = 3;
    CONST PENDENTE = 4;
    CONST CANCELADA = 5;
    CONST INSTALADA = 6;
    CONST REPROVADA = 7;
    CONST COMISSIONADA = 8;
    CONST DESISTENCIA = 9;
    CONST INADIMPLENTE = 10;
    CONST SEM_VIABILIDADE = 11;

    protected $entityName = 'Base\BaseBundle\Entity\TbSituacao';
}