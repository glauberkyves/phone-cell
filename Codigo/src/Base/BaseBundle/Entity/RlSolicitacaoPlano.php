<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSolicitacaoPlano
 *
 * @ORM\Table(name="rl_solicitacao_plano", indexes={@ORM\Index(name="id_solicitacaoplano_solicitacao_idx", columns={"id_solicitacao"}), @ORM\Index(name="id_solicitacaoplano_plano_idx", columns={"id_plano"})})
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\SolicitacaoPlanoRepository")
 */
class RlSolicitacaoPlano extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solicitacao_plano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolicitacaoPlano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_adicional", type="integer", nullable=false)
     */
    private $stAdicional = '0';

    /**
     * @var \TbPlano
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbPlano")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plano", referencedColumnName="id_plano")
     * })
     */
    private $idPlano;

    /**
     * @var \TbSolicitacao
     *
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbSolicitacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitacao", referencedColumnName="id_solicitacao")
     * })
     */
    private $idSolicitacao;

    public function __construct()
    {
        $this->dtCadastro = new \DateTime();
    }

    /**
     * @return int
     */
    public function getIdSolicitacaoPlano()
    {
        return $this->idSolicitacaoPlano;
    }

    /**
     * @param int $idSolicitacaoPlano
     */
    public function setIdSolicitacaoPlano($idSolicitacaoPlano)
    {
        $this->idSolicitacaoPlano = $idSolicitacaoPlano;
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
     * @return int
     */
    public function getStAdicional()
    {
        return $this->stAdicional;
    }

    /**
     * @param int $stAdicional
     */
    public function setStAdicional($stAdicional)
    {
        $this->stAdicional = $stAdicional;
    }

    /**
     * @return \TbPlano
     */
    public function getIdPlano()
    {
        return $this->idPlano;
    }

    /**
     * @param \TbPlano $idPlano
     */
    public function setIdPlano($idPlano)
    {
        $this->idPlano = $idPlano;
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
