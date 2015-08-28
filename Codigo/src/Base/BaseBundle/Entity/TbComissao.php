<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbComissao
 *
 * @ORM\Table(name="tb_comissao", indexes={@ORM\Index(name="fk_comissao_usuairo_idx", columns={"id_usuario"}), @ORM\Index(name="fk_comissao_ordemservico_idx", columns={"id_ordem_servico"})})
 * @ORM\Entity
 */
class TbComissao extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComissao;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_valor", type="integer", nullable=false)
     */
    private $nuValor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    /**
     * @var \TbTipoOrdemServico
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;

    /**
     * @return int
     */
    public function getIdComissao()
    {
        return $this->idComissao;
    }

    /**
     * @param int $idComissao
     */
    public function setIdComissao($idComissao)
    {
        $this->idComissao = $idComissao;
    }

    /**
     * @return int
     */
    public function getNuValor()
    {
        return $this->nuValor;
    }

    /**
     * @param int $nuValor
     */
    public function setNuValor($nuValor)
    {
        $this->nuValor = $nuValor;
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
     * @return \TbUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param \TbUsuario $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return \TbTipoOrdemServico
     */
    public function getIdOrdemServico()
    {
        return $this->idOrdemServico;
    }

    /**
     * @param \TbTipoOrdemServico $idOrdemServico
     */
    public function setIdOrdemServico($idOrdemServico)
    {
        $this->idOrdemServico = $idOrdemServico;
    }
}

