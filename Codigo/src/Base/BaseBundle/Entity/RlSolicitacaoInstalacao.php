<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSolicitacaoInstalacao
 *
 * @ORM\Table(name="rl_solicitacao_instalacao", indexes={@ORM\Index(name="fk_solicitacaoinstalacao_solicitacao_idx", columns={"id_solicitacao"}), @ORM\Index(name="fk_solicitacaoinstalacao_instalacao_idx", columns={"id_instalacao"})})
 * @ORM\Entity
 */
class RlSolicitacaoInstalacao extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solicitacao_instalacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolicitacaoInstalacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_segunda_opcao", type="integer", nullable=false)
     */
    private $stSegundaOpcao = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbInstalacao
     *
     * @ORM\ManyToOne(targetEntity="TbInstalacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_instalacao", referencedColumnName="id_instalacao")
     * })
     */
    private $idInstalacao;

    /**
     * @var \TbSolicitacao
     *
     * @ORM\OneToOne(targetEntity="TbSolicitacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitacao", referencedColumnName="id_solicitacao")
     * })
     */
    private $idSolicitacao;

    /**
     * @return int
     */
    public function getIdSolicitacaoInstalacao()
    {
        return $this->idSolicitacaoInstalacao;
    }

    /**
     * @param int $idSolicitacaoInstalacao
     */
    public function setIdSolicitacaoInstalacao($idSolicitacaoInstalacao)
    {
        $this->idSolicitacaoInstalacao = $idSolicitacaoInstalacao;
    }

    /**
     * @return int
     */
    public function getStSegundaOpcao()
    {
        return $this->stSegundaOpcao;
    }

    /**
     * @param int $stSegundaOpcao
     */
    public function setStSegundaOpcao($stSegundaOpcao)
    {
        $this->stSegundaOpcao = $stSegundaOpcao;
    }

    /**
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @param \DateTime $dtCadastro
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    }

    /**
     * @return \TbInstalacao
     */
    public function getIdInstalacao()
    {
        return $this->idInstalacao;
    }

    /**
     * @param \TbInstalacao $idInstalacao
     */
    public function setIdInstalacao($idInstalacao)
    {
        $this->idInstalacao = $idInstalacao;
    }

    /**
     * @return \TbSolicitacao
     */
    public function getIdSolicitacao()
    {
        return $this->idSolicitacao;
    }

    /**
     * @param \TbSolicitacao $idSolicitacao
     */
    public function setIdSolicitacao($idSolicitacao)
    {
        $this->idSolicitacao = $idSolicitacao;
    }


}
