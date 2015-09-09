<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlOrdemServicoPlano
 *
 * @ORM\Table(name="rl_ordem_servico_plano", indexes={@ORM\Index(name="id_solicitacaoplano_plano_idx", columns={"id_plano"}), @ORM\Index(name="id_solicitacaoplano_solicitacao_idx", columns={"id_ordem_servico"})})
 * @ORM\Entity
 */
class RlOrdemServicoPlano extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordem_servico_plano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemServicoPlano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbOrdemServico
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;

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
     * @return int
     */
    public function getIdOrdemServicoPlano()
    {
        return $this->idOrdemServicoPlano;
    }

    /**
     * @param int $idOrdemServicoPlano
     */
    public function setIdOrdemServicoPlano($idOrdemServicoPlano)
    {
        $this->idOrdemServicoPlano = $idOrdemServicoPlano;
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
     * @return \TbOrdemServico
     */
    public function getIdOrdemServico()
    {
        return $this->idOrdemServico;
    }

    /**
     * @param \TbOrdemServico $idOrdemServico
     */
    public function setIdOrdemServico($idOrdemServico)
    {
        $this->idOrdemServico = $idOrdemServico;
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
}

