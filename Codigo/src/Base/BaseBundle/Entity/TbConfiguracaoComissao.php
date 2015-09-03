<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbConfiguracaoComissao
 *
 * @ORM\Table(name="tb_configuracao_comissao", indexes={@ORM\Index(name="fk_configuracaocomissao_pacote_idx", columns={"id_pacote"}), @ORM\Index(name="fk_configuracaocomissao_plano_idx", columns={"id_plano"}), @ORM\Index(name="fk_configuracaocomissao_velocidade_idx", columns={"id_velocidade"})})
 * @ORM\Entity
 */
class TbConfiguracaoComissao extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_configuracao_comissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfiguracaoComissao;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $nuValor;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_comissao_supervisor", type="integer", nullable=true)
     */
    private $stComissaoSupervisor;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_interno", type="integer", nullable=false)
     */
    private $stInterno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbPacote
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbPacote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pacote", referencedColumnName="id_pacote")
     * })
     */
    private $idPacote;

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
     * @var \TbVelocidade
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbVelocidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_velocidade", referencedColumnName="id_velocidade")
     * })
     */
    private $idVelocidade;

    /**
     * @return int
     */
    public function getIdConfiguracaoComissao()
    {
        return $this->idConfiguracaoComissao;
    }

    /**
     * @param int $idConfiguracaoComissao
     */
    public function setIdConfiguracaoComissao($idConfiguracaoComissao)
    {
        $this->idConfiguracaoComissao = $idConfiguracaoComissao;
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
     * @return \TbPacote
     */
    public function getIdPacote()
    {
        return $this->idPacote;
    }

    /**
     * @param \TbPacote $idPacote
     */
    public function setIdPacote($idPacote)
    {
        $this->idPacote = $idPacote;
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
     * @return \TbVelocidade
     */
    public function getIdVelocidade()
    {
        return $this->idVelocidade;
    }

    /**
     * @param \TbVelocidade $idVelocidade
     */
    public function setIdVelocidade($idVelocidade)
    {
        $this->idVelocidade = $idVelocidade;
    }

    /**
     * @return string
     */
    public function getNuValor()
    {
        return $this->nuValor;
    }

    /**
     * @param string $nuValor
     */
    public function setNuValor($nuValor)
    {
        $this->nuValor = $nuValor;
    }

    /**
     * @return int
     */
    public function getStInterno()
    {
        return $this->stInterno;
    }

    /**
     * @param int $stInterno
     */
    public function setStInterno($stInterno)
    {
        $this->stInterno = $stInterno;
    }

    /**
     * @return int
     */
    public function getStComissaoSupervisor()
    {
        return $this->stComissaoSupervisor;
    }

    /**
     * @param int $stComissaoSupervisor
     */
    public function setStComissaoSupervisor($stComissaoSupervisor)
    {
        $this->stComissaoSupervisor = $stComissaoSupervisor;
    }



}

