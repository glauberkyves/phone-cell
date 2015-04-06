<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\UsuarioBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\BaseBundle\Service\Data;
use Base\CrudBundle\Service\CrudService;

class PessoaFisica extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbPessoaFisica';

    public function preSave(AbstractEntity $entity = null, $params = array())
    {
        $entityPessoa = $this
            ->getService('service.pessoa')
            ->save(null, $params);

        $this->entity->setIdPessoa($entityPessoa);

        if (isset($params['nuCpf'])) {
            $this->entity->setNuCpf(preg_replace("/[^0-9]/", "", $params['nuCpf']));
        }

        if (is_string($this->entity->getDtNascimento())) {
            $this->entity->setDtNascimento(Data::dateBr($this->entity->getDtNascimento()));
        }

        if (is_string($this->entity->getDtExpedicao())) {
            $this->entity->setDtExpedicao(Data::dateBr($this->entity->getDtExpedicao()));
        }
    }
}