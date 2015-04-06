<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\OrdemServicoBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
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
        $params = $this->getRequest()->get('ordem');
        $this->entity->populate($params);
        $this->entity->setIdPessoa($this->savePessoa());
        $this->entity->setIdUsuario($this->getUser());

        if (isset($params['nuNumeroPortado'])) {
            $this->entity->setNuNumeroPortado(preg_replace("/[^0-9]/", "", $params['nuNumeroPortado']));
            $this->entity->setNuTerminalFixoExistente(preg_replace("/[^0-9]/", "", $params['nuTerminalFi}xoExistente']));
        }

        $idTipoOrdemServico = $this->getService('service.tipo_ordem_servico')->find(TipoOrdemServico::OIFIXO);
        $this->entity->setIdTipoOrdemServico($idTipoOrdemServico);

        $idSituacao = $this->getService('service.situacao')->find(Situacao::COLETADA);
        $this->entity->setIdSituacao($idSituacao);

        if (isset($params['idVelocidade']) && $params['idVelocidade']) {
            $idVelocidade = $this->getService('service.velocidade')->find($params['idVelocidade']);
            $this->entity->setIdVelocidade($idVelocidade);
        }else{
            $this->entity->setIdVelocidade(null);
        }

        if (is_string($this->entity->getDtVenda())) {
            $this->entity->setDtVenda(new \DateTime($this->entity->getDtVenda()));
        }
    }

    public function postSave(AbstractEntity $entity = null)
    {
        $this->savePlanos();
        $this->savePacotes();
        $this->saveContato();
        $this->saveEndereco($this->entity->getIdPessoa()->getIdPessoa());

        $this->saveHistorico();
    }

    public function saveEndereco($idPessoa)
    {
        $arrEndereco             = $this->getRequest()->get('endereco');
        $arrEndereco['idPessoa'] = $idPessoa;
        $this->getService('service.endereco')->save(null, $arrEndereco);
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

    public function savePessoa()
    {
        $arrPessoa = $this->getRequest()->get('pessoa');
        $entity    = $this->getService('service.pessoa_fisica')->newEntity()->populate($arrPessoa);
        $this->getService('service.pessoa_fisica')->save($entity, $arrPessoa);

        return $entity->getIdPessoa();
    }

    public function savePlanos()
    {
        $arrOrdemServico = $this->getRequest()->get('ordem');

        if (isset($arrOrdemServico['idPacote']) && $arrOrdemServico['idPacote']) {
            $svOrdemServicoPacote = $this->getService('service.ordem_pacote');

            foreach ($svOrdemServicoPacote->findByIdOrdemServico($this->entity->getIdOrdemServico()) as $planoOld) {
                $this->remove($planoOld);
            }

            foreach ($arrOrdemServico['idPacote'] as $pacote) {
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
        $arrOrdemServico = $this->getRequest()->get('ordem');

        if (isset($arrOrdemServico['idPlano']) && $arrOrdemServico['idPlano']) {
            $svOrdemServicoPlano = $this->getService('service.ordem_plano');

            foreach ($svOrdemServicoPlano->findByIdOrdemServico($this->entity->getIdOrdemServico()) as $planoOld) {
                $this->remove($planoOld);
            }

            foreach ($arrOrdemServico['idPlano'] as $plano) {
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
}