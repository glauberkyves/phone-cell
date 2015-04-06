<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 23/01/15
 * Time: 13:51
 */

namespace Base\BaseBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\CrudService;

class Endereco extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbEndereco';

    public function preSave(AbstractEntity $entity = null, array $params = array())
    {
        $idPessoa = $this->getService('service.pessoa')->find($params['idPessoa']);
        $this->entity->setIdPessoa($idPessoa);

        $idMunicipio = $this->getService('service.municipio')->find($params['idMunicipio']);
        $this->entity->setIdMunicipio($idMunicipio);

        $this->entity->setNuCep(preg_replace("/[^0-9]/", "", $params['nuCep']));
    }
}