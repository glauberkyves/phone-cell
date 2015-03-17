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

class PessoaFisica extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbPessoaFisica';

    public function preInsert(AbstractEntity $entity = null)
    {
        $entityPessoa = $this
            ->getService('service.pessoa')
            ->save();

        $this->entity->setIdPessoa($entityPessoa);

        $entity->setDtNascimento(new \DateTime($entity->getDtNascimento()));
        $entity->setDtExpedicao(new \DateTime($entity->getDtExpedicao()));
    }

    public function preUpdate(AbstractEntity $entity = null)
    {
        if (is_string($entity->getDtNascimento())) {
            $this->entity->setDtNascimento(new \DateTime($this->entity->getDtNascimento()));
        }

        if (is_string($entity->getDtExpedicao())) {
            $this->entity->setDtExpedicao(new \DateTime($this->entity->getDtExpedicao()));
        }
    }
}