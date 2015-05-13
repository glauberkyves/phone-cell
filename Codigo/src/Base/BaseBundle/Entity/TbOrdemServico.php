<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrdemServico
 *
 * @ORM\Table(name="tb_ordem_servico", indexes={@ORM\Index(name="fk_ordemservico_situacao_idx", columns={"id_situacao"}), @ORM\Index(name="fk_ordemservico_pessoa_idx", columns={"id_pessoa"}), @ORM\Index(name="fk_ordemservico_usuario_idx", columns={"id_usuario"}), @ORM\Index(name="fk_ordemservico_tipoordemservico_idx", columns={"id_tipo_ordem_servico"}), @ORM\Index(name="fk_ordemservico_velocidade_idx", columns={"id_velocidade"})})
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\OrdemServicoRepository")
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
     * @ORM\Column(name="nu_ordem_servico", type="string", length=20, nullable=true)
     */
    private $nuOrdemServico;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_local", type="string", length=45, nullable=true)
     */
    private $dsLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_contrato_oi", type="string", length=45, nullable=true)
     */
    private $nuContratoOi;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_forma_pagamento", type="string", length=45, nullable=true)
     */
    private $tpFormaPagamento;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_ponto_adicional", type="string", length=45, nullable=true)
     */
    private $nuPontoAdicional;

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
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_velocidade_outra", type="string", length=45, nullable=true)
     */
    private $dsVelocidadeOutra;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_plano_outro", type="string", length=45, nullable=true)
     */
    private $dsPlanoOutro;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_produto", type="integer", nullable=true)
     */
    private $tpProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_numero_portado", type="integer", nullable=true)
     */
    private $nuNumeroPortado;

    /**
     * @var string
     *
     * @ORM\Column(name="no_operadora_origem", type="string", length=45, nullable=true)
     */
    private $noOperadoraOrigem;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_portabilidade", type="integer", nullable=true)
     */
    private $stPortabilidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_terminal_fixo_instalacao", type="integer", nullable=true)
     */
    private $tpTerminalFixoInstalacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_terminal_fixo_existente", type="integer", nullable=true)
     */
    private $nuTerminalFixoExistente;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_valor_parcela", type="integer", nullable=true)
     */
    private $nuValorParcela;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_taxa_habilitacao", type="integer", nullable=true)
     */
    private $stTaxaHabilitacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_quantidade_parcela", type="integer", nullable=true)
     */
    private $nuQuantidadeParcela;

    /**
     * @var string
     *
     * @ORM\Column(name="no_banco", type="string", length=45, nullable=true)
     */
    private $noBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_conta", type="string", length=45, nullable=true)
     */
    private $nuConta;

    /**
     * @var string
     *
     * @ORM\Column(name="tp_fidelizacao", type="string", length=45, nullable=true)
     */
    private $tpFidelizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_agencia", type="string", length=45, nullable=true)
     */
    private $nuAgencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_dacc", type="integer", nullable=true)
     */
    private $tpDacc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_vencimento", type="datetime", nullable=true)
     */
    private $dtVencimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_pagamento", type="integer", nullable=true)
     */
    private $tpPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_debito_automatico", type="integer", nullable=true)
     */
    private $stDebitoAutomatico;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_outro_pacote", type="string", length=45, nullable=true)
     */
    private $dsOutroPacote;

    /**
     * @var string
     *
     * @ORM\Column(name="no_url", type="string", length=45, nullable=true)
     */
    private $noUrl;

    /**
     * @var \TbPessoa
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    /**
     * @var \TbTipoOrdemServico
     *
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbTipoOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_ordem_servico", referencedColumnName="id_tipo_ordem_servico")
     * })
     */
    private $idTipoOrdemServico;

    /**
     * @var \TbVelocidade
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbVelocidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_velocidade", referencedColumnName="id_velocidade")
     * })
     */
    private $idVelocidade;

    /**
     * @var \TbSituacao
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbSituacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_situacao", referencedColumnName="id_situacao")
     * })
     */
    private $idSituacao;

    public function __construct()
    {
        $this->dtCadastro   = new \DateTime();
        $this->dtVenda      = new \DateTime();
        $this->dtVencimento = new \DateTime();
    }

    /**
     * @return int
     */
    public function getIdOrdemServico()
    {
        return $this->idOrdemServico;
    }

    /**
     * @param int $idOrdemServico
     */
    public function setIdOrdemServico($idOrdemServico)
    {
        $this->idOrdemServico = $idOrdemServico;
    }

    /**
     * @return string
     */
    public function getNuOrdemServico()
    {
        return $this->nuOrdemServico;
    }

    /**
     * @param string $nuOrdemServico
     */
    public function setNuOrdemServico($nuOrdemServico)
    {
        $this->nuOrdemServico = $nuOrdemServico;
    }

    /**
     * @return string
     */
    public function getDsLocal()
    {
        return $this->dsLocal;
    }

    /**
     * @param string $dsLocal
     */
    public function setDsLocal($dsLocal)
    {
        $this->dsLocal = $dsLocal;
    }

    /**
     * @return string
     */
    public function getNuContratoOi()
    {
        return $this->nuContratoOi;
    }

    /**
     * @param string $nuContratoOi
     */
    public function setNuContratoOi($nuContratoOi)
    {
        $this->nuContratoOi = $nuContratoOi;
    }

    /**
     * @return string
     */
    public function getNuOrdemServicoOi()
    {
        return $this->nuOrdemServicoOi;
    }

    /**
     * @param string $nuOrdemServicoOi
     */
    public function setNuOrdemServicoOi($nuOrdemServicoOi)
    {
        $this->nuOrdemServicoOi = $nuOrdemServicoOi;
    }

    /**
     * @return string
     */
    public function getNuProtocoloOiTv()
    {
        return $this->nuProtocoloOiTv;
    }

    /**
     * @param string $nuProtocoloOiTv
     */
    public function setNuProtocoloOiTv($nuProtocoloOiTv)
    {
        $this->nuProtocoloOiTv = $nuProtocoloOiTv;
    }

    /**
     * @return string
     */
    public function getNuOrdemServicoOiTv()
    {
        return $this->nuOrdemServicoOiTv;
    }

    /**
     * @param string $nuOrdemServicoOiTv
     */
    public function setNuOrdemServicoOiTv($nuOrdemServicoOiTv)
    {
        $this->nuOrdemServicoOiTv = $nuOrdemServicoOiTv;
    }

    /**
     * @return \DateTime
     */
    public function getDtVenda()
    {
        return $this->dtVenda;
    }

    /**
     * @param \DateTime $dtVenda
     */
    public function setDtVenda($dtVenda)
    {
        $this->dtVenda = $dtVenda;
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
     * @return string
     */
    public function getDsVelocidadeOutra()
    {
        return $this->dsVelocidadeOutra;
    }

    /**
     * @param string $dsVelocidadeOutra
     */
    public function setDsVelocidadeOutra($dsVelocidadeOutra)
    {
        $this->dsVelocidadeOutra = $dsVelocidadeOutra;
    }

    /**
     * @return string
     */
    public function getDsPlanoOutro()
    {
        return $this->dsPlanoOutro;
    }

    /**
     * @param string $dsPlanoOutro
     */
    public function setDsPlanoOutro($dsPlanoOutro)
    {
        $this->dsPlanoOutro = $dsPlanoOutro;
    }

    /**
     * @return int
     */
    public function getNuNumeroPortado()
    {
        return $this->nuNumeroPortado;
    }

    /**
     * @param int $nuNumeroPortado
     */
    public function setNuNumeroPortado($nuNumeroPortado)
    {
        $this->nuNumeroPortado = $nuNumeroPortado;
    }

    /**
     * @return string
     */
    public function getNoOperadoraOrigem()
    {
        return $this->noOperadoraOrigem;
    }

    /**
     * @param string $noOperadoraOrigem
     */
    public function setNoOperadoraOrigem($noOperadoraOrigem)
    {
        $this->noOperadoraOrigem = $noOperadoraOrigem;
    }

    /**
     * @return int
     */
    public function getStPortabilidade()
    {
        return $this->stPortabilidade;
    }

    /**
     * @param int $stPortabilidade
     */
    public function setStPortabilidade($stPortabilidade)
    {
        $this->stPortabilidade = $stPortabilidade;
    }

    /**
     * @return int
     */
    public function getTpTerminalFixoInstalacao()
    {
        return $this->tpTerminalFixoInstalacao;
    }

    /**
     * @param int $tpTerminalFixoInstalacao
     */
    public function setTpTerminalFixoInstalacao($tpTerminalFixoInstalacao)
    {
        $this->tpTerminalFixoInstalacao = $tpTerminalFixoInstalacao;
    }

    /**
     * @return int
     */
    public function getNuTerminalFixoExistente()
    {
        return $this->nuTerminalFixoExistente;
    }

    /**
     * @param int $nuTerminalFixoExistente
     */
    public function setNuTerminalFixoExistente($nuTerminalFixoExistente)
    {
        $this->nuTerminalFixoExistente = $nuTerminalFixoExistente;
    }

    /**
     * @return int
     */
    public function getNuValorParcela()
    {
        return $this->nuValorParcela;
    }

    /**
     * @param int $nuValorParcela
     */
    public function setNuValorParcela($nuValorParcela)
    {
        $this->nuValorParcela = $nuValorParcela;
    }

    /**
     * @return int
     */
    public function getStTaxaHabilitacao()
    {
        return $this->stTaxaHabilitacao;
    }

    /**
     * @param int $stTaxaHabilitacao
     */
    public function setStTaxaHabilitacao($stTaxaHabilitacao)
    {
        $this->stTaxaHabilitacao = $stTaxaHabilitacao;
    }

    /**
     * @return int
     */
    public function getNuQuantidadeParcela()
    {
        return $this->nuQuantidadeParcela;
    }

    /**
     * @param int $nuQuantidadeParcela
     */
    public function setNuQuantidadeParcela($nuQuantidadeParcela)
    {
        $this->nuQuantidadeParcela = $nuQuantidadeParcela;
    }

    /**
     * @return string
     */
    public function getNoBanco()
    {
        return $this->noBanco;
    }

    /**
     * @param string $noBanco
     */
    public function setNoBanco($noBanco)
    {
        $this->noBanco = $noBanco;
    }

    /**
     * @return string
     */
    public function getNuConta()
    {
        return $this->nuConta;
    }

    /**
     * @param string $nuConta
     */
    public function setNuConta($nuConta)
    {
        $this->nuConta = $nuConta;
    }

    /**
     * @return string
     */
    public function getNuAgencia()
    {
        return $this->nuAgencia;
    }

    /**
     * @param string $nuAgencia
     */
    public function setNuAgencia($nuAgencia)
    {
        $this->nuAgencia = $nuAgencia;
    }

    /**
     * @return int
     */
    public function getTpDacc()
    {
        return $this->tpDacc;
    }

    /**
     * @param int $tpDacc
     */
    public function setTpDacc($tpDacc)
    {
        $this->tpDacc = $tpDacc;
    }

    /**
     * @return \DateTime
     */
    public function getDtVencimento()
    {
        return $this->dtVencimento;
    }

    /**
     * @param \DateTime $dtVencimento
     */
    public function setDtVencimento($dtVencimento)
    {
        $this->dtVencimento = $dtVencimento;
    }

    /**
     * @return int
     */
    public function getNuPontoAdicional()
    {
        return $this->nuPontoAdicional;
    }

    /**
     * @param int $nuPontoAdicional
     */
    public function setNuPontoAdicional($nuPontoAdicional)
    {
        $this->nuPontoAdicional = $nuPontoAdicional;
    }

    /**
     * @return int
     */
    public function getTpPagamento()
    {
        return $this->tpPagamento;
    }

    /**
     * @param int $tpPagamento
     */
    public function setTpPagamento($tpPagamento)
    {
        $this->tpPagamento = $tpPagamento;
    }

    /**
     * @return int
     */
    public function getStDebitoAutomatico()
    {
        return $this->stDebitoAutomatico;
    }

    /**
     * @param int $stDebitoAutomatico
     */
    public function setStDebitoAutomatico($stDebitoAutomatico)
    {
        $this->stDebitoAutomatico = $stDebitoAutomatico;
    }

    /**
     * @return string
     */
    public function getDsOutroPacote()
    {
        return $this->dsOutroPacote;
    }

    /**
     * @param string $dsOutroPacote
     */
    public function setDsOutroPacote($dsOutroPacote)
    {
        $this->dsOutroPacote = $dsOutroPacote;
    }

    /**
     * @return \TbPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa ? $this->idPessoa : new TbPessoa();
    }

    /**
     * @param \TbPessoa $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * @return \TbUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario ? $this->idUsuario : new TbUsuario();
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
    public function getIdTipoOrdemServico()
    {
        return $this->idTipoOrdemServico ? $this->idTipoOrdemServico : new TbTipoOrdemServico();
    }

    /**
     * @param \TbTipoOrdemServico $idTipoOrdemServico
     */
    public function setIdTipoOrdemServico($idTipoOrdemServico)
    {
        $this->idTipoOrdemServico = $idTipoOrdemServico;
    }

    /**
     * @return \TbVelocidade
     */
    public function getIdVelocidade()
    {
        return $this->idVelocidade ? $this->idVelocidade : new TbVelocidade();
    }

    /**
     * @param \TbVelocidade $idVelocidade
     */
    public function setIdVelocidade($idVelocidade)
    {
        $this->idVelocidade = $idVelocidade;
    }

    /**
     * @return \TbSituacao
     */
    public function getIdSituacao()
    {
        return $this->idSituacao ? $this->idSituacao : new TbSituacao();
    }

    /**
     * @param \TbSituacao $idSituacao
     */
    public function setIdSituacao($idSituacao)
    {
        $this->idSituacao = $idSituacao;
    }

    /**
     * @return int
     */
    public function getTpProduto()
    {
        return $this->tpProduto;
    }

    /**
     * @param int $tpProduto
     */
    public function setTpProduto($tpProduto)
    {
        $this->tpProduto = $tpProduto;
    }

    /**
     * @return string
     */
    public function getTpFormaPagamento()
    {
        return $this->tpFormaPagamento;
    }

    /**
     * @param string $tpFormaPagamento
     */
    public function setTpFormaPagamento($tpFormaPagamento)
    {
        $this->tpFormaPagamento = $tpFormaPagamento;
    }

    /**
     * @return string
     */
    public function getTpFidelizacao()
    {
        return $this->tpFidelizacao;
    }

    /**
     * @param string $tpFidelizacao
     */
    public function setTpFidelizacao($tpFidelizacao)
    {
        $this->tpFidelizacao = $tpFidelizacao;
    }

    /**
     * @return string
     */
    public function getNoUrl()
    {
        return $this->noUrl;
    }

    /**
     * @param string $noUrl
     */
    public function setNoUrl($noUrl)
    {
        $this->noUrl = $noUrl;
    }
}