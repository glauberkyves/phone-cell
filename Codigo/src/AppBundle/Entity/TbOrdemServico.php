<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrdemServico
 *
 * @ORM\Table(name="tb_ordem_servico", indexes={@ORM\Index(name="fk_ordemservico_situacao_idx", columns={"id_situacao"}), @ORM\Index(name="fk_ordemservico_pessoa_idx", columns={"id_pessoa"}), @ORM\Index(name="fk_ordemservico_usuario_idx", columns={"id_usuario"}), @ORM\Index(name="fk_ordemservico_tipoordemservico_idx", columns={"id_tipo_ordem_servico"}), @ORM\Index(name="fk_ordemservico_velocidade_idx", columns={"id_velocidade"})})
 * @ORM\Entity
 */
class TbOrdemServico
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
     * @ORM\Column(name="nu_taxa_habilitacao", type="integer", nullable=true)
     */
    private $nuTaxaHabilitacao;

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
     * @var integer
     *
     * @ORM\Column(name="tp_figuracao_em_lista", type="integer", nullable=false)
     */
    private $tpFiguracaoEmLista;

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
     * @ORM\Column(name="nu_ponto_adicional", type="integer", nullable=true)
     */
    private $nuPontoAdicional;

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
     * @var integer
     *
     * @ORM\Column(name="tp_produto", type="integer", nullable=true)
     */
    private $tpProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_valor_parcela", type="integer", nullable=true)
     */
    private $nuValorParcela;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_forma_pagamento", type="integer", nullable=true)
     */
    private $tpFormaPagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_fidelizacao", type="integer", nullable=true)
     */
    private $tpFidelizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_url", type="string", length=100, nullable=true)
     */
    private $noUrl;

    /**
     * @var \TbPessoa
     *
     * @ORM\ManyToOne(targetEntity="TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;

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
     * @var \TbTipoOrdemServico
     *
     * @ORM\ManyToOne(targetEntity="TbTipoOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_ordem_servico", referencedColumnName="id_tipo_ordem_servico")
     * })
     */
    private $idTipoOrdemServico;

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
     * @var \TbVelocidade
     *
     * @ORM\ManyToOne(targetEntity="TbVelocidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_velocidade", referencedColumnName="id_velocidade")
     * })
     */
    private $idVelocidade;


}

