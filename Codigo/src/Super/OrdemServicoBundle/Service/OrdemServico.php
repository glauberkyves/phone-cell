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
    }

    public function preSave(AbstractEntity $entity = null)
    {
        $params = $this->getRequest()->get('ordem');
        $this->entity->populate($params);
        $this->entity->setIdPessoa($this->savePessoa());
        $this->entity->setIdUsuario($this->getUser());

        $idTipoOrdemServico = $this->getService('service.tipo_ordem_servico')->find(TipoOrdemServico::OIFIXO);
        $this->entity->setIdTipoOrdemServico($idTipoOrdemServico);

        if (isset($params['idVelocidade']) && $params['idVelocidade']) {
            $idVelocidade = $this->getService('service.velocidade')->find($params['idVelocidade']);
            $this->entity->setIdTipoOrdemServico($idVelocidade);
        }

        if (is_string($this->entity->getDtCadastro())) {
            $this->entity->setDtCadastro(new \DateTime($this->entity->getDtCadastro()));
        }
    }

    public function postSave(AbstractEntity $entity = null)
    {
        $idPlano = $this->savePlanos();
        $idEndereco = $this->saveEndereco($this->entity->getIdPessoa());
        $idOrdemServico = $this->saveOrdem($this->entity->getIdPessoa());

        echo '<pre>';
        var_dump(123);
        die;
        $this->saveHistorico($idOrdemServico);
    }

    public function saveEndereco($idPessoa)
    {
        $arrEndereco = $this->getRequest()->get('endereco');
        $idEndereco = $this->getService('service.endereco')->newEntity()->populate($arrEndereco);

        if (isset($arrEndereco['idEndereco']) && $arrEndereco['idEndereco']) {
            $idEndereco = $this->getService('service.endereco')->find($arrEndereco['idPessoa'])->populate($arrEndereco);
        }

        $this->persist($idEndereco);

        $idPessoaEndereco = $this->getService('service.pessoa_endereco')->newEntity();
        $idPessoaEndereco->setIdPessoa($idPessoa);
        $idPessoaEndereco->setIdEndereco($idEndereco);
        $idPessoaEndereco->setDtCadastro(new \DateTime());

        $this->persist($idPessoaEndereco);
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
        $entity = $this->getService('service.pessoa_fisica')->newEntity()->populate($arrPessoa);
        $this->getService('service.pessoa_fisica')->save($entity, $arrPessoa);

        return $entity->getIdPessoa();
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