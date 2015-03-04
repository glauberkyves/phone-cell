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

class Pessoa extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbPessoa';

    public function preInsert(AbstractEntity $entity = null)
    {
        $entity->setDtCadastro(new \DateTime());
        $entity->setStAtivo(true);
    }

    public function postUpdate(AbstractEntity $entity = null)
    {
        $entity->setDtAtualizacaoF(new \DateTime());
    }
}