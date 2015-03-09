<?php

namespace Super\SolicitacaoBundle\Controller;

use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends CrudController
{
    protected $serviceName = 'service.solicitacao';

    public function createAction(Request $request)
    {
        $this->getCmb();

        return parent::createAction($request);
    }

    public function getCmb()
    {
        $this->vars['cmbSexo']   = Dominio::getStSexo();
        $this->vars['arrEstado'] = $this->getService('service.estado')->getComboDefault(array(), array('noEstado' => 'asc'));

        $this->vars['arrMunicipio'] = array('' => 'Selecione');
        $this->vars['arrBairro']    = array('' => 'Selecione');
        $this->vars['arrProduto']   = Dominio::getStProduto();

        $this->vars['arrPlano']   = $this->getService('service.plano')->findBy(array(), array('noPlano' => 'asc'));
        $this->vars['arrPeriodo'] = Dominio::getPeriodo(true);
        $this->vars['arrSimNao']  = Dominio::getSimNao(true);
    }
}
