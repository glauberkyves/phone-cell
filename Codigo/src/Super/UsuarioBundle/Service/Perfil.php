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

class Perfil extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbPerfil';

    public function preInsert(AbstractEntity $entity = null)
    {
        $this->entity->setDtCadastro(new \DateTime());
    }

    public function postUpdate(AbstractEntity $entity = null)
    {
        $this->entity->setDtAtualizacao(new \DateTime());
    }
}