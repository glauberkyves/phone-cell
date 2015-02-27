<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrdemServico
 *
 * @ORM\Table(name="tb_ordem_servico", indexes={@ORM\Index(name="fk_ordemservico_situacao_idx", columns={"id_situacao"})})
 * @ORM\Entity
 */
class TbOrdemServico extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordem_servico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemServico;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_ordem_servico", type="string", length=20, nullable=false)
     */
    private $nuOrdemServico;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_matricula_vendedor", type="string", length=15, nullable=false)
     */
    private $nuMatriculaVendedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_termo_usuario", type="integer", nullable=false)
     */
    private $stTermoUsuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_termo_cliente", type="integer", nullable=false)
     */
    private $stTermoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_local", type="string", length=45, nullable=true)
     */
    private $dsLocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_os_assinada", type="integer", nullable=false)
     */
    private $stOsAssinada;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_contrato_oi", type="string", length=45, nullable=true)
     */
    private $nuContratoOi;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_ordem_servico_oi", type="string", length=45, nullable=true)
     */
    private $nuOrdemServicoOi;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_protocolo_oi_tv", type="string", length=45, nullable=true)
     */
    private $nuProtocoloOiTv;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_ordem_servico_oi_tv", type="string", length=45, nullable=true)
     */
    private $nuOrdemServicoOiTv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_venda", type="datetime", nullable=true)
     */
    private $dtVenda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_assinatura", type="datetime", nullable=false)
     */
    private $dtAssinatura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbSituacao
     *
     * @ORM\ManyToOne(targetEntity="TbSituacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_situacao", referencedColumnName="id_situacao")
     * })
     */
    private $idSituacao;

    /**
     * @return int
     */
    public function getIdOrdemServico()
    {
        return $this->idOrdemServico;
    }

    /**
     * @return string
     */
    public function getNuOrdemServico()
    {
        return $this->nuOrdemServico;
    }

    /**
     * @return string
     */
    public function getNuMatriculaVendedor()
    {
        return $this->nuMatriculaVendedor;
    }

    /**
     * @return int
     */
    public function getStTermoUsuario()
    {
        return $this->stTermoUsuario;
    }

    /**
     * @return int
     */
    public function getStTermoCliente()
    {
        return $this->stTermoCliente;
    }

    /**
     * @return string
     */
    public function getDsLocal()
    {
        return $this->dsLocal;
    }

    /**
     * @return int
     */
    public function getStOsAssinada()
    {
        return $this->stOsAssinada;
    }

    /**
     * @return string
     */
    public function getNuContratoOi()
    {
        return $this->nuContratoOi;
    }

    /**
     * @return string
     */
    public function getNuOrdemServicoOi()
    {
        return $this->nuOrdemServicoOi;
    }

    /**
     * @return string
     */
    public function getNuProtocoloOiTv()
    {
        return $this->nuProtocoloOiTv;
    }

    /**
     * @return string
     */
    public function getNuOrdemServicoOiTv()
    {
        return $this->nuOrdemServicoOiTv;
    }

    /**
     * @return \DateTime
     */
    public function getDtVenda()
    {
        return $this->dtVenda;
    }

    /**
     * @return \DateTime
     */
    public function getDtAssinatura()
    {
        return $this->dtAssinatura;
    }

    /**
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @return \TbSituacao
     */
    public function getIdSituacao()
    {
        return $this->idSituacao;
    }

    /**
     * @param string $nuOrdemServico
     */
    public function setNuOrdemServico($nuOrdemServico)
    {
        $this->nuOrdemServico = $nuOrdemServico;
    }

    /**
     * @param string $nuMatriculaVendedor
     */
    public function setNuMatriculaVendedor($nuMatriculaVendedor)
    {
        $this->nuMatriculaVendedor = $nuMatriculaVendedor;
    }

    /**
     * @param int $stTermoUsuario
     */
    public function setStTermoUsuario($stTermoUsuario)
    {
        $this->stTermoUsuario = $stTermoUsuario;
    }

    /**
     * @param int $stTermoCliente
     */
    public function setStTermoCliente($stTermoCliente)
    {
        $this->stTermoCliente = $stTermoCliente;
    }

    /**
     * @param string $dsLocal
     */
    public function setDsLocal($dsLocal)
    {
        $this->dsLocal = $dsLocal;
    }

    /**
     * @param int $stOsAssinada
     */
    public function setStOsAssinada($stOsAssinada)
    {
        $this->stOsAssinada = $stOsAssinada;
    }

    /**
     * @param string $nuContratoOi
     */
    public function setNuContratoOi($nuContratoOi)
    {
        $this->nuContratoOi = $nuContratoOi;
    }

    /**
     * @param string $nuOrdemServicoOi
     */
    public function setNuOrdemServicoOi($nuOrdemServicoOi)
    {
        $this->nuOrdemServicoOi = $nuOrdemServicoOi;
    }

    /**
     * @param string $nuProtocoloOiTv
     */
    public function setNuProtocoloOiTv($nuProtocoloOiTv)
    {
        $this->nuProtocoloOiTv = $nuProtocoloOiTv;
    }

    /**
     * @param string $nuOrdemServicoOiTv
     */
    public function setNuOrdemServicoOiTv($nuOrdemServicoOiTv)
    {
        $this->nuOrdemServicoOiTv = $nuOrdemServicoOiTv;
    }

    /**
     * @param \DateTime $dtVenda
     */
    public function setDtVenda($dtVenda)
    {
        $this->dtVenda = $dtVenda;
    }

    /**
     * @param \DateTime $dtAssinatura
     */
    public function setDtAssinatura($dtAssinatura)
    {
        $this->dtAssinatura = $dtAssinatura;
    }

    /**
     * @param \DateTime $dtCadastro
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    }

    /**
     * @param \TbSituacao $idSituacao
     */
    public function setIdSituacao($idSituacao)
    {
        $this->idSituacao = $idSituacao;
    }
}