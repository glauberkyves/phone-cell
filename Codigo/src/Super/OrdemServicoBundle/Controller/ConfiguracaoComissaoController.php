<?php

namespace Super\OrdemServicoBundle\Controller;

use Base\BaseBundle\Entity\TbConfiguracaoComissao;
use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class ConfiguracaoComissaoController extends CrudController
{
    protected $serviceName = 'service.ordem_servico';


    public function indexAction(Request $request)
    {
        $this->vars['planos']       = $this->getService('service.plano')->findByStAtivo(true);
        $this->vars['pacotes']      = $this->getService('service.pacote')->findByStAtivo(true);
        $this->vars['velocidades']  = $this->getService('service.velocidade')->findAll();
        $this->vars['configuracao'] = $this->getService('service.comissao')->findAll();

        if ($request->isMethod('post')) {
            $valor = str_replace(".", "", $request->request->get('supervisor'));
            $valor = str_replace(",", ".", $valor);

            $confComissao = new TbConfiguracaoComissao();

            $criteria = array(
                'stComissaoSupervisor' => true,
            );
            if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                $confComissao = $entity;
            }

            $confComissao->setStInterno(false);
            $confComissao->setNuValor($valor);
            $confComissao->setStComissaoSupervisor(true);
            $confComissao->setDtCadastro(new \DateTime());

            $this->getService()->persist($confComissao);

            foreach ($request->request->get('plano') as $key => $value) {
                if ($key == 'interno') {
                    foreach ($value as $idPlano => $valor) {
                        $valor = str_replace(".", "", $valor);
                        $valor = str_replace(",", ".", $valor);

                        $confComissao = new TbConfiguracaoComissao();

                        $criteria = array(
                            'idPlano'   => $idPlano,
                            'stInterno' => true
                        );
                        if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                            $confComissao = $entity;
                        }

                        $confComissao->setIdPlano($this->getService('service.plano')->find($idPlano));
                        $confComissao->setStInterno(true);
                        $confComissao->setNuValor($valor);
                        $confComissao->setDtCadastro(new \DateTime());

                        $this->getService()->persist($confComissao);
                    }

                } else {
                    foreach ($value as $idPlano => $valor) {
                        $valor = str_replace(".", "", $valor);
                        $valor = str_replace(",", ".", $valor);

                        $confComissao = new TbConfiguracaoComissao();

                        $criteria = array(
                            'idPlano'   => $idPlano,
                            'stInterno' => false
                        );
                        if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                            $confComissao = $entity;
                        }

                        $confComissao->setIdPlano($this->getService('service.plano')->find($idPlano));
                        $confComissao->setStInterno(false);
                        $confComissao->setNuValor($valor);
                        $confComissao->setDtCadastro(new \DateTime());

                        $this->getService()->persist($confComissao);
                    }
                }
            }

            foreach ($request->request->get('pacote') as $key => $value) {
                if ($key == 'interno') {
                    foreach ($value as $idPacote => $valor) {
                        $valor = str_replace(".", "", $valor);
                        $valor = str_replace(",", ".", $valor);

                        $confComissao = new TbConfiguracaoComissao();

                        $criteria = array(
                            'idPacote'  => $idPacote,
                            'stInterno' => true
                        );
                        if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                            $confComissao = $entity;
                        }

                        $confComissao->setIdPacote($this->getService('service.pacote')->find($idPacote));
                        $confComissao->setStInterno(true);
                        $confComissao->setNuValor($valor);
                        $confComissao->setDtCadastro(new \DateTime());

                        $this->getService()->persist($confComissao);
                    }

                } else {
                    foreach ($value as $idPacote => $valor) {
                        $valor = str_replace(".", "", $valor);
                        $valor = str_replace(",", ".", $valor);

                        $confComissao = new TbConfiguracaoComissao();

                        $criteria = array(
                            'idPacote'  => $idPacote,
                            'stInterno' => false
                        );
                        if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                            $confComissao = $entity;
                        }

                        $confComissao->setIdPacote($this->getService('service.pacote')->find($idPacote));
                        $confComissao->setStInterno(false);
                        $confComissao->setNuValor($valor);
                        $confComissao->setDtCadastro(new \DateTime());

                        $this->getService()->persist($confComissao);
                    }
                }
            }

            foreach ($request->request->get('velocidade') as $key => $value) {
                if ($key == 'interno') {
                    foreach ($value as $idVelocidade => $valor) {
                        $valor = str_replace(".", "", $valor);
                        $valor = str_replace(",", ".", $valor);

                        $confComissao = new TbConfiguracaoComissao();

                        $criteria = array(
                            'idVelocidade' => $idVelocidade,
                            'stInterno'    => true
                        );
                        if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                            $confComissao = $entity;
                        }

                        $confComissao->setIdVelocidade($this->getService('service.velocidade')->find($idVelocidade));
                        $confComissao->setStInterno(true);
                        $confComissao->setNuValor($valor);
                        $confComissao->setDtCadastro(new \DateTime());

                        $this->getService()->persist($confComissao);
                    }

                } else {
                    foreach ($value as $idVelocidade => $valor) {
                        $valor = str_replace(".", "", $valor);
                        $valor = str_replace(",", ".", $valor);

                        $confComissao = new TbConfiguracaoComissao();

                        $criteria = array(
                            'idVelocidade' => $idVelocidade,
                            'stInterno'    => false
                        );
                        if ($entity = $this->getService('service.comissao')->findOneBy($criteria)) {
                            $confComissao = $entity;
                        }

                        $confComissao->setIdVelocidade($this->getService('service.velocidade')->find($idVelocidade));
                        $confComissao->setStInterno(false);
                        $confComissao->setNuValor($valor);
                        $confComissao->setDtCadastro(new \DateTime());

                        $this->getService()->persist($confComissao);
                    }
                }
            }

            $this->addMessage('Operação realizada com sucesso.');
        }

        return $this->render($this->resolveRouteName(), $this->vars);
    }
}

