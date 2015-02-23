<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 23/01/15
 * Time: 13:51
 */

namespace Base\BaseBundle\Service;


use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\Exception\CrudServiceException;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator;

class AbstractService extends BaseService
{
    protected $entityName = null;
    protected $entity = null;
    protected $erros = false;

    /**
     * @param AbstractEntity $entity
     * @return AbstractEntity|\Exception
     */
    public function save(AbstractEntity $entity = null)
    {
        if (null === $entity) {
            $this->entity = new $this->entityName;
        } else {
            $this->entity = $entity;
        }

        $params    = $this->getContainer()->get('request_stack')->getCurrentRequest()->request->all();
        $metadata  = $this->getEntityManager()->getClassMetadata(get_class($this->entity));
        $arguments = func_get_args();
        $insert    = false;

        if (array_key_exists(current($metadata->getIdentifier()), $params)) {
            $this->entity = $this->find($params[current($metadata->getIdentifier())]);
            $this->entity->populate($params, true);
        } else {
            $this->entity = $this->newEntity()->populate($params, true);
            $insert       = true;
        }

        if(!$arguments){
            array_push($arguments, $this->entity);
        }

        switch (true) {
            case $insert:
                call_user_func_array(array($this, 'preInsert'), $arguments);
                break;
            case !$insert:
                call_user_func_array(array($this, 'preUpdate'), $arguments);
                break;
            default:
                call_user_func_array(array($this, 'preSave'), $arguments);
        }

        $this->persist();

        switch (true) {
            case $insert:
                call_user_func_array(array($this, 'postInsert'), $arguments);
                break;
            case !$insert:
                call_user_func_array(array($this, 'postUpdate'), $arguments);
                break;
            default:
                call_user_func_array(array($this, 'postSave'), $arguments);
        }

        return $this->entity;
    }

    public function preSave(AbstractEntity $entity = null)
    {

    }

    public function postSave(AbstractEntity $entity = null)
    {

    }

    public function preInsert(AbstractEntity $entity = null)
    {

    }

    public function postInsert(AbstractEntity $entity = null)
    {

    }

    public function preUpdate(AbstractEntity $entity = null)
    {

    }

    public function postUpdate(AbstractEntity $entity = null)
    {

    }

    public function persist(AbstractEntity $entity = null)
    {
        if (null === $entity) {
            $entity = $this->entity;
        }

        try {
            $this->getEntityManager()->persist($entity);
            $this->getEntityManager()->flush($entity);
        } catch (\Exception $exc) {
            throw new CrudServiceException($exc->getMessage());
        }

        return $entity;
    }
}