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
            ->save();

        $this->entity->setIdPessoa($entityPessoa->getIdPessoa());
        $this->entity->setDtCadastro(new \DateTime());
    }

    public function postSave(AbstractEntity $entity = null)
    {
        if($this->entity->getIdUsuario()){
            $svUsuarioPerfil = $this->getService('service.usuario_perfil');
            foreach($svUsuarioPerfil->findByIdUsuario($this->entity->getIdUsuario()) as $perfilOld){
                $this->remove($perfilOld);
            }

            foreach($this->getRequest()->get('perfis') as $idPerfil){
                $perfil = $this->getService('service.perfil')->find($idPerfil);

                $usuarioPefil = $svUsuarioPerfil->newEntity();
                $usuarioPefil->setIdUsuario($this->entity);
                $usuarioPefil->setIdPerfil($perfil);
                $usuarioPefil->setStAtivo(true);
                $usuarioPefil->setDtCadastro(new \DateTime());

                $this->persist($usuarioPefil);
            }
        }
    }
}