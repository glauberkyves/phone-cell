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

    public function parserItens(array $itens = array(), $addOptions = false)
    {
        foreach ($itens as $key => $value) {
            $html   = '<div class="btn-group  btn-group-sm">';
            $rtEdit = $this->getRouter()->generate('super_perfil_edit', array('id' => $value['idPerfil']));

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