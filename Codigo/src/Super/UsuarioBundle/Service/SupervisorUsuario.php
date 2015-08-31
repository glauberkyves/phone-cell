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
use Symfony\Component\HttpFoundation\Request;

class SupervisorUsuario extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\RlSupervisorVendendor';

    public function parserItens(array $itens = array(), $addOptions = false)
    {
        foreach ($itens as $key => $value) {
            $html   = '<div class="btn-group  btn-group-sm">';
            $rtEdit = $this->getRouter()->generate('super_supervisor_vendedor_gerenciar', array('id' => $value['idUsuario']));

            $html .= "<a href=\"{$rtEdit}\">";
            $html .= '<button class="btn btn-white" type="button">';
            $html .= '<i class="fa fa-edit"></i>';
            $html .= '</button></a>';
            $html .= ' </div>';

            $itens[$key]['opcoes'] = $html;
        }

        return parent::parserItens($itens);
    }

    public function saveVendedores(Request $request)
    {
        if ($request->request->get('vendedores')) {
            foreach ($this->findByIdSupervisor($request->request->get('idSupervisor')) as $entityOld) {
                $this->remove($entityOld);
            }

            $supervisor = $this->getService('service.usuario')->find($request->request->get('idSupervisor'));

            foreach ($request->request->get('vendedores') as $idVendedor) {
                $vendedor = $this->getService('service.usuario')->find($idVendedor);

                $supervisorUsuario = $this->newEntity();
                $supervisorUsuario->setIdVendedor($vendedor);
                $supervisorUsuario->setIdSupervisor($supervisor);
                $supervisorUsuario->setDtCadastro(new \DateTime());

                $this->persist($supervisorUsuario);
            }
        }
    }
}