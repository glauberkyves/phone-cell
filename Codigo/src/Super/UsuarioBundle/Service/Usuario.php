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

class Usuario extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbUsuario';

    public function preInsert(AbstractEntity $entity = null)
    {
        $entityPessoa = $this
            ->getService('service.pessoa_fisica')
            ->newEntity()
            ->populate();
        echo '<pre>'; var_dump($entityPessoa);die;


        $entity->setIdPessoa($entityPessoa->getIdPessoa());
    }
}