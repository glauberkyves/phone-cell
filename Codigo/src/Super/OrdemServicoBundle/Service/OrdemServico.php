<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\OrdemServicoBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\BaseBundle\Entity\TbTipoOrdemServico;
use Base\CrudBundle\Service\CrudService;

class OrdemServico extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbOrdemServico';

    public function preInsert(AbstractEntity $entity = null)
    {
        $this->entity->setDtCadastro(new \DateTime());
    }

    public function preSave(AbstractEntity $entity = null, array $params = array())
    {
        $request = $this->getRequest()->request;

        $this->entity->populate($params);
        $this->entity->setIdPessoa($this->savePessoa());

        $this->entity->setNuNumeroPortado($request->getDigits('nuNumeroPortado'));
        $this->entity->setNuTerminalFixoExistente($request->getDigits('nuTerminalFixoExistente'));

        $idTipoOrdemServico = $this->getService('service.tipo_ordem_servico')->find(TipoOrdemServico::OIFIXO);
        $this->entity->setIdTipoOrdemServico($idTipoOrdemServico);

        $idSituacao = $this->getService('service.situacao')->find(Situacao::COLETADA);
        $this->entity->setIdSituacao($idSituacao);

        if ($request->has('idVelocidade')) {
            $idVelocidade = $this->getService('service.velocidade')->find($params['idVelocidade']);
            $this->entity->setIdVelocidade($idVelocidade);
        } else {
            $this->entity->setIdVelocidade(null);
        }

        if (is_string($this->entity->getDtVenda())) {
            $this->entity->setDtVenda(new \DateTime($this->entity->getDtVenda()));
        }

        if ($request->get('idUsuario')) {
            $idUsuario = $this->getService('service.usuario')->find($request->get('idUsuario'));
            $this->entity->setIdUsuario($idUsuario);
        } else {
            $this->entity->setIdUsuario($this->getUser());
        }
    }

    public function postSave(AbstractEntity $entity = null)
    {
        $this->savePlanos();
        $this->savePacotes();
        $this->saveContato();
        $this->saveEndereco(
            array('idPessoa' => $this->entity->getIdPessoa()->getIdPessoa()) +
            $this->getRequest()->request->all()
        );

        $this->saveHistorico();
    }

    public function saveEndereco(array $params = array())
    {
        $this
            ->getService('service.endereco')
            ->save(null, $params);
    }

    public function saveHistorico()
    {
        $entity = $this->getService('service.historico')->newEntity();

        $entity->setIdOrdemServico($this->entity);
        $entity->setIdSituacao($this->entity->getIdSituacao());
        $entity->setIdUsuario($this->getUser());
        $entity->setDtCadastro(new \DateTime());

        $this->persist($entity);
    }

    public function savePessoa(array $params = array())
    {
        return $this
            ->getService('service.pessoa_fisica')
            ->save(null, $params)
            ->getIdPessoa();
    }

    public function savePlanos()
    {
        $request = $this->getRequest()->request;

        if ($request->has('idPacote')) {
            $svOrdemServicoPacote = $this->getService('service.ordem_pacote');

            foreach ($svOrdemServicoPacote->findByIdOrdemServico($this->entity->getIdOrdemServico()) as $planoOld) {
                $this->remove($planoOld);
            }

            foreach ($request->get('idPacote') as $pacote) {
                $idPlano = $this->getService('service.pacote')->find($pacote);

                $entity = $svOrdemServicoPacote->newEntity();

                $entity->setIdPacote($idPlano);
                $entity->setIdOrdemServico($this->entity);
                $entity->setDtCadastro(new \DateTime());

                $this->persist($entity);
            }
        }
    }

    public function savePacotes()
    {
        $request = $this->getRequest()->request;

        if ($request->get('idPlano')) {
            $svOrdemServicoPlano = $this->getService('service.ordem_plano');

            foreach ($svOrdemServicoPlano->findByIdOrdemServico($this->entity->getIdOrdemServico()) as $planoOld) {
                $this->remove($planoOld);
            }

            foreach ($request->get('idPlano') as $plano) {
                $idPlano = $this->getService('service.plano')->find($plano);

                $entity = $svOrdemServicoPlano->newEntity();

                $entity->setIdPlano($idPlano);
                $entity->setIdOrdemServico($this->entity);
                $entity->setDtCadastro(new \DateTime());

                $this->persist($entity);
            }
        }
    }

    public function saveContato()
    {
        $arrContato = $this->getRequest()->get('contato');
    }

    public function parserItens(array $itens = array(), $addOptions = false)
    {
        foreach ($itens as $key => $value) {
            foreach ($value as $keyIten => $iten) {
                switch (true) {
                    case $keyIten == 'nuCpf':
                        $cpf = substr($itens[$key][$keyIten], 0, 3) . '.' . substr($itens[$key][$keyIten], 3, 3) . '.';
                        $cpf .= substr($itens[$key][$keyIten], 6, 3) . '-' . substr($itens[$key][$keyIten], 9);
                        $itens[$key][$keyIten] = $cpf;
                        break;
                }
            }
        }

        return parent::parserItens($itens, true);
    }

    public function encaminhar($idOrdemServico)
    {
        $this->entity = $this->find($idOrdemServico);

        if ($this->entity) {
            switch ($this->entity->getIdSituacao()->getIdSituacao()) {
                case Situacao::COLETADA:
                    $this->entity->setIdSituacao($this->getService('service.situacao')->find(Situacao::VALIDADA));
                    break;

                case Situacao::VALIDADA:
                    $this->entity->setIdSituacao($this->getService('service.situacao')->find(Situacao::IMPUTADA));
                    break;
            }

            $this->persist($this->entity);
            $this->saveHistorico();

            return true;
        }

        return false;
    }

    public function upload()
    {
        $request = $this->getRequest();
        $fileName = $this->uploadFile('ordem-servico', 'file', true);

        $entity = $this->find($request->request->get('idOrdemServico'));
        $entity->setNoUrl($fileName);

        $this->persist($entity);
    }
}