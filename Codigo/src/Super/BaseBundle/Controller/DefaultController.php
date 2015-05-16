<?php

namespace Super\BaseBundle\Controller;

use Base\CrudBundle\Controller\CrudController;
use Super\OrdemServicoBundle\Service\Situacao;
use Super\OrdemServicoBundle\Service\TipoOrdemServico;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends CrudController
{
    protected $serviceName = '';

    public function indexAction(Request $request)
    {
        $this->vars['oiFixo']       = $this->getService('service.ordem_servico')->findByIdTipoOrdemServico(TipoOrdemServico::OIFIXO);
        $this->vars['oiTv']         = $this->getService('service.ordem_servico')->findByIdTipoOrdemServico(TipoOrdemServico::OITV);
        $this->vars['coletadas']    = $this->getService('service.ordem_servico')->findByIdSituacao(Situacao::COLETADA);
        $this->vars['validadas']    = $this->getService('service.ordem_servico')->findByIdSituacao(Situacao::VALIDADA);
        $this->vars['imputadas']    = $this->getService('service.ordem_servico')->findByIdSituacao(Situacao::IMPUTADA);
        $this->vars['pendentes']    = $this->getService('service.ordem_servico')->findByIdSituacao(Situacao::PENDENTE);
        $this->vars['canceladas']   = $this->getService('service.ordem_servico')->findByIdSituacao(Situacao::CANCELADA);


        return $this->render($this->resolveRouteName(), $this->vars);
    }
}
