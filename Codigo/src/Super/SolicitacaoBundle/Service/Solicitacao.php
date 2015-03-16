<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:14
 */

namespace Super\SolicitacaoBundle\Service;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\CrudBundle\Service\CrudService;

class Solicitacao extends CrudService
{
    protected $entityName = 'Base\BaseBundle\Entity\TbSolicitacao';

    public function preInsert(AbstractEntity $entity = null)
    {
        $this->entity->populate($this->getRequest()->get('solicitacao'));
        $this->entity->setDtCadastro(new \DateTime());
    }

    public function postSave(AbstractEntity $entity = null)
    {
        $idPessoa = $this->savePessoa();
        $idPlano = $this->savePlanos();
        $idEndereco = $this->saveEndereco();
        $idOrdemServico = $this->saveOrdem($idPessoa);
        $this->saveHistorico($idOrdemServico);
    }

    public function saveHistorico($idOrdemServico)
    {
        $entity = $this->getService('service.historico')->newEntity();

        $entity->setIdOrdemServico($idOrdemServico);
        $entity->setIdSituacao($idOrdemServico->getIdSituacao());
        $entity->setIdUsuario($this->getUser());
        $entity->setDtCadastro(new \DateTime());

        $this->persist($entity);
    }

    public function saveOrdem($idPessoa)
    {
        $arrOrdem = $this->getRequest()->get('ordem');
        $entity = $this->getService('service.ordem_servico')->newEntity()->populate($arrOrdem);

        $entity->setIdPessoa($idPessoa);
        $entity->setIdSolicitacao($this->entity);
        $entity->setIdUsuario($this->getUser());

        $idSituacao = $this->getService('service.situacao')->find(Situacao::COLETADA);
        $entity->setIdSituacao($idSituacao);

        return $this->persist($entity);
    }

    public function savePessoa()
    {
        $arrPessoa = $this->getRequest()->get('pessoa');
        $entity = $this->getService('service.pessoa')->newEntity()->populate($arrPessoa);

        if (isset($arrPessoa['idPessoa']) && $arrPessoa['idPessoa']) {
            $entity = $this->getService('service.pessoa')->find($arrPessoa['idPessoa'])->populate($arrPessoa);
            $entityPessoaFisica = $this->getService('service.pessoa_fisica')->find($arrPessoa['idPessoa'])->populate($arrPessoa);
        }

        $entityPessoaFisica->setDtNascimento(new \DateTime($entityPessoaFisica->getDtNascimento()));
        $entityPessoaFisica->setDtExpedicao(new \DateTime($entityPessoaFisica->getDtExpedicao()));

        $this->persist($entity);
        $this->persist($entityPessoaFisica);

        return $entity;
    }

    public function savePlanos()
    {
        $arrSolicitacao = $this->getRequest()->get('solicitacao');

        if (isset($arrSolicitacao['idPlano']) && $arrSolicitacao['idPlano']) {
            $svSolictacaoPlano = $this->getService('service.solicitacao_plano');
            foreach ($svSolictacaoPlano->findByIdSolicitacao($this->entity->getIdSolicitacao()) as $planoOld) {
                $this->remove($planoOld);
            }

            foreach ($arrSolicitacao['idPlano'] as $plano) {
                $idPlano = $this->getService('service.plano')->find($plano);

                $entity = $svSolictacaoPlano->newEntity();

                $entity->setIdPlano($idPlano);
                $entity->setIdSolicitacao($this->entity);
                $entity->setDtCadastro(new \DateTime());

                $this->persist($entity);
            }
        }
    }
}