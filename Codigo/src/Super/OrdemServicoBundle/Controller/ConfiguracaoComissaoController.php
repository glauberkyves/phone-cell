<?php

namespace Super\OrdemServicoBundle\Controller;

use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class ConfiguracaoComissaoController extends CrudController
{
    protected $serviceName = 'service.ordem_servico';


    public function indexAction(Request $request)
    {
        $this->vars['planos'] = $this->getService('service.plano')->findByStAtivo(true);
        $this->vars['pacotes'] = $this->getService('service.pacote')->findByStAtivo(true);
        $this->vars['velocidades'] = $this->getService('service.velocidade')->findAll();

        return $this->render($this->resolveRouteName(), $this->vars);
    }
}

