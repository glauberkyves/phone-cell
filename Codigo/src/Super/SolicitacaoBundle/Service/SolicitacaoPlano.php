<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\SolicitacaoBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\CrudService;

class SolicitacaoPlano extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\RlSolicitacaoPlano';

    public function preInsert(AbstractEntity $entity = null)
    {
        $entity->setDtCadastro(new \DateTime());
    }
}