<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbSolicitacao
 *
 * @ORM\Table(name="tb_solicitacao")
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\SolicitacaoRepository")
 */
class TbSolicitacao extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solicitacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolicitacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_solicitacao", type="string", length=45, nullable=false)
     */
    private $noSolicitacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_velocidade", type="integer", nullable=true)
     */
    private $tpVelocidade;

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
     * @var string
     *
     * @ORM\Column(name="tp_produto", type="string", length=45, nullable=true)
     */
    private $tpProduto;

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
     * @var string
     *
     * @ORM\Column(name="ds_campanha", type="string", length=100, nullable=true)
     */
    private $dsCampanha;

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
     * @ORM\Column(name="nu_valor_parcela", type="integer", nullable=true)
     */
    private $nuValorParcela;

    /**
     * @var integer
     *
     * @ORM\Column(name="tp_figuracao_em_lista", type="integer", nullable=true)
     */
    private $tpFiguracaoEmLista;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_conta_sem_papel", type="integer", nullable=true)
     */
    private $stContaSemPapel;

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
     * @ORM\Column(name="id_endereco_instalacao", type="integer", nullable=true)
     */
    private $idEnderecoInstalacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_ponto_adicional", type="integer", nullable=true)
     */
    private $nuPontoAdicional;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_endereco_instalacao_titulo", type="integer", nullable=true)
     */
    private $stEnderecoInstalacaoTitulo;

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
     * @var integer
     *
     * @ORM\Column(name="st_a_la_carte", type="integer", nullable=true)
     */
    private $stALaCarte;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_outro_pacote", type="string", length=45, nullable=true)
     */
    private $dsOutroPacote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @return int
     */
    public function getIdSolicitacao()
    {
        return $this->idSolicitacao;
    }

    /**
     * @return string
     */
    public function getNoSolicitacao()
    {
        return $this->noSolicitacao;
    }

    /**
     * @return int
     */
    public function getTpVelocidade()
    {
        return $this->tpVelocidade;
    }

    /**
     * @return string
     */
    public function getDsPlanoOutro()
    {
        return $this->dsPlanoOutro;
    }

    /**
     * @return int
     */
    public function getNuNumeroPortado()
    {
        return $this->nuNumeroPortado;
    }

    /**
     * @return string
     */
    public function getNoOperadoraOrigem()
    {
        return $this->noOperadoraOrigem;
    }

    /**
     * @return int
     */
    public function getStPortabilidade()
    {
        return $this->stPortabilidade;
    }

    /**
     * @return string
     */
    public function getTpProduto()
    {
        return $this->tpProduto;
    }

    /**
     * @return int
     */
    public function getTpTerminalFixoInstalacao()
    {
        return $this->tpTerminalFixoInstalacao;
    }

    /**
     * @return int
     */
    public function getNuTerminalFixoExistente()
    {
        return $this->nuTerminalFixoExistente;
    }

    /**
     * @return int
     */
    public function getNuTaxaHabilitacao()
    {
        return $this->nuTaxaHabilitacao;
    }

    /**
     * @return string
     */
    public function getDsCampanha()
    {
        return $this->dsCampanha;
    }

    /**
     * @return int
     */
    public function getStTaxaHabilitacao()
    {
        return $this->stTaxaHabilitacao;
    }

    /**
     * @return int
     */
    public function getNuQuantidadeParcela()
    {
        return $this->nuQuantidadeParcela;
    }

    /**
     * @return int
     */
    public function getNuValorParcela()
    {
        return $this->nuValorParcela;
    }

    /**
     * @return int
     */
    public function getTpFiguracaoEmLista()
    {
        return $this->tpFiguracaoEmLista;
    }

    /**
     * @return int
     */
    public function getStContaSemPapel()
    {
        return $this->stContaSemPapel;
    }

    /**
     * @return string
     */
    public function getNoBanco()
    {
        return $this->noBanco;
    }

    /**
     * @return string
     */
    public function getNuConta()
    {
        return $this->nuConta;
    }

    /**
     * @return string
     */
    public function getNuAgencia()
    {
        return $this->nuAgencia;
    }

    /**
     * @return int
     */
    public function getTpDacc()
    {
        return $this->tpDacc;
    }

    /**
     * @return \DateTime
     */
    public function getDtVencimento()
    {
        return $this->dtVencimento;
    }

    /**
     * @return int
     */
    public function getIdEnderecoInstalacao()
    {
        return $this->idEnderecoInstalacao;
    }

    /**
     * @return int
     */
    public function getNuPontoAdicional()
    {
        return $this->nuPontoAdicional;
    }

    /**
     * @return int
     */
    public function getStEnderecoInstalacaoTitulo()
    {
        return $this->stEnderecoInstalacaoTitulo;
    }

    /**
     * @return int
     */
    public function getTpPagamento()
    {
        return $this->tpPagamento;
    }

    /**
     * @return int
     */
    public function getStDebitoAutomatico()
    {
        return $this->stDebitoAutomatico;
    }

    /**
     * @return int
     */
    public function getStALaCarte()
    {
        return $this->stALaCarte;
    }

    /**
     * @return string
     */
    public function getDsOutroPacote()
    {
        return $this->dsOutroPacote;
    }

    /**
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @param string $noSolicitacao
     */
    public function setNoSolicitacao($noSolicitacao)
    {
        $this->noSolicitacao = $noSolicitacao;
    }

    /**
     * @param int $tpVelocidade
     */
    public function setTpVelocidade($tpVelocidade)
    {
        $this->tpVelocidade = $tpVelocidade;
    }

    /**
     * @param string $dsVelocidadeOutra
     */
    public function setDsVelocidadeOutra($dsVelocidadeOutra)
    {
        $this->dsVelocidadeOutra = $dsVelocidadeOutra;
    }

    /**
     * @param string $noSolicitaaco
     */
    public function setNoSolicitaaco($noSolicitaaco)
    {
        $this->noSolicitaaco = $noSolicitaaco;
    }

    /**
     * @param string $dsPlanoOutro
     */
    public function setDsPlanoOutro($dsPlanoOutro)
    {
        $this->dsPlanoOutro = $dsPlanoOutro;
    }

    /**
     * @param int $nuNumeroPortado
     */
    public function setNuNumeroPortado($nuNumeroPortado)
    {
        $this->nuNumeroPortado = $nuNumeroPortado;
    }

    /**
     * @param string $noOperadoraOrigem
     */
    public function setNoOperadoraOrigem($noOperadoraOrigem)
    {
        $this->noOperadoraOrigem = $noOperadoraOrigem;
    }

    /**
     * @param int $stPortabilidade
     */
    public function setStPortabilidade($stPortabilidade)
    {
        $this->stPortabilidade = $stPortabilidade;
    }

    /**
     * @param string $tpProduto
     */
    public function setTpProduto($tpProduto)
    {
        $this->tpProduto = $tpProduto;
    }

    /**
     * @param int $tpTerminalFixoInstalacao
     */
    public function setTpTerminalFixoInstalacao($tpTerminalFixoInstalacao)
    {
        $this->tpTerminalFixoInstalacao = $tpTerminalFixoInstalacao;
    }

    /**
     * @param int $nuTerminalFixoExistente
     */
    public function setNuTerminalFixoExistente($nuTerminalFixoExistente)
    {
        $this->nuTerminalFixoExistente = $nuTerminalFixoExistente;
    }

    /**
     * @param int $nuTaxaHabilitacao
     */
    public function setNuTaxaHabilitacao($nuTaxaHabilitacao)
    {
        $this->nuTaxaHabilitacao = $nuTaxaHabilitacao;
    }

    /**
     * @param string $dsCampanha
     */
    public function setDsCampanha($dsCampanha)
    {
        $this->dsCampanha = $dsCampanha;
    }

    /**
     * @param int $stTaxaHabilitacao
     */
    public function setStTaxaHabilitacao($stTaxaHabilitacao)
    {
        $this->stTaxaHabilitacao = $stTaxaHabilitacao;
    }

    /**
     * @param int $nuQuantidadeParcela
     */
    public function setNuQuantidadeParcela($nuQuantidadeParcela)
    {
        $this->nuQuantidadeParcela = $nuQuantidadeParcela;
    }

    /**
     * @param int $nuValorParcela
     */
    public function setNuValorParcela($nuValorParcela)
    {
        $this->nuValorParcela = $nuValorParcela;
    }

    /**
     * @param int $tpFiguracaoEmLista
     */
    public function setTpFiguracaoEmLista($tpFiguracaoEmLista)
    {
        $this->tpFiguracaoEmLista = $tpFiguracaoEmLista;
    }

    /**
     * @param int $stContaSemPapel
     */
    public function setStContaSemPapel($stContaSemPapel)
    {
        $this->stContaSemPapel = $stContaSemPapel;
    }

    /**
     * @param string $noBanco
     */
    public function setNoBanco($noBanco)
    {
        $this->noBanco = $noBanco;
    }

    /**
     * @param string $nuConta
     */
    public function setNuConta($nuConta)
    {
        $this->nuConta = $nuConta;
    }

    /**
     * @param string $nuAgencia
     */
    public function setNuAgencia($nuAgencia)
    {
        $this->nuAgencia = $nuAgencia;
    }

    /**
     * @param int $tpDacc
     */
    public function setTpDacc($tpDacc)
    {
        $this->tpDacc = $tpDacc;
    }

    /**
     * @param \DateTime $dtVencimento
     */
    public function setDtVencimento($dtVencimento)
    {
        $this->dtVencimento = $dtVencimento;
    }

    /**
     * @param int $idEnderecoInstalacao
     */
    public function setIdEnderecoInstalacao($idEnderecoInstalacao)
    {
        $this->idEnderecoInstalacao = $idEnderecoInstalacao;
    }

    /**
     * @param int $nuPontoAdicional
     */
    public function setNuPontoAdicional($nuPontoAdicional)
    {
        $this->nuPontoAdicional = $nuPontoAdicional;
    }

    /**
     * @param int $stEnderecoInstalacaoTitulo
     */
    public function setStEnderecoInstalacaoTitulo($stEnderecoInstalacaoTitulo)
    {
        $this->stEnderecoInstalacaoTitulo = $stEnderecoInstalacaoTitulo;
    }

    /**
     * @param int $tpPagamento
     */
    public function setTpPagamento($tpPagamento)
    {
        $this->tpPagamento = $tpPagamento;
    }

    /**
     * @param int $stDebitoAutomatico
     */
    public function setStDebitoAutomatico($stDebitoAutomatico)
    {
        $this->stDebitoAutomatico = $stDebitoAutomatico;
    }

    /**
     * @param int $stALaCarte
     */
    public function setStALaCarte($stALaCarte)
    {
        $this->stALaCarte = $stALaCarte;
    }

    /**
     * @param string $dsOutroPacote
     */
    public function setDsOutroPacote($dsOutroPacote)
    {
        $this->dsOutroPacote = $dsOutroPacote;
    }

    /**
     * @param \DateTime $dtCadastro
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    }


}
