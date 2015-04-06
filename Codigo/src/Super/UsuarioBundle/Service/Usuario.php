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
        $this->entity->setNoSenha(md5($this->entity->getNoSenha()));

//        $this->generateSecretHash($entity);
    }

    public function postUpdate(AbstractEntity $entity = null)
    {
        $this->getService('service.pessoa')
            ->save($this->entity->getIdPessoa());

        $this->entity->setDtAtualizacao(new \DateTime());
    }

    public function postSave(AbstractEntity $entity = null)
    {
        if ($this->entity->getIdUsuario()) {
            $svUsuarioPerfil = $this->getService('service.usuario_perfil');
            foreach ($svUsuarioPerfil->findByIdUsuario($this->entity->getIdUsuario()) as $perfilOld) {
                $this->remove($perfilOld);
            }

            foreach ($this->getRequest()->get('perfis') as $idPerfil) {
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

    public function generateSecretHash($entity)
    {
        $idUsuario = md5($entity->getIdUsuario());
        $noSenha   = md5($entity->getNoSenha());

        $entity->setNoSenha(md5($idUsuario . $noSenha));

        $this->persist($entity);
    }

    public function parserItens(array $itens = array())
    {
        foreach ($itens as $key => $value) {
            $html   = '<div class="btn-group  btn-group-sm">';
            $rtEdit = $this->getRouter()->generate('super_usuario_edit', array('id' => $value['idUsuario']));

            $html .= '<button class="btn btn-white" type="button">';
            $html .= "<a href=\"{$rtEdit}\">";
            $html .= '<i class="fa fa-edit"></i>';
            $html .= '</a></button>';
            $html .= ' </div>';

            $itens[$key]['opcoes'] = $html;
        }

        return parent::parserItens($itens);
    }
}