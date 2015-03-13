<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Base\BaseBundle\Validator\Constraints as BaseAssert;

/**
 * TbPessoaFisica
 *
 * @ORM\Table(name="tb_pessoa_fisica", indexes={@ORM\Index(name="FK_PESSOAFISICA_PESSOA_idx", columns={"id_pessoa"})})
 * @ORM\Entity
 */
class TbPessoaFisica extends AbstractEntity
{
    /**
     * @var integer
     *
     * @BaseAssert\ConstraintCPF(message="base_bundle.validators.cpf")
     * @ORM\Column(name="nu_cpf", type="string", nullable=true)
     */
    private $nuCpf;

    /**
     * @var \DateTime
     *
     * @Assert\DateTime(message="base_bundle.validators.datetime")
     * @ORM\Column(name="dt_nascimento", type="datetime", nullable=true)
     */
    private $dtNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="sg_sexo", type="string", length=1, nullable=true)
     */
    private $sgSexo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_nascionalidade", type="string", length=45, nullable=true)
     */
    private $noNascionalidade;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_rg", type="string", length=45, nullable=true)
     */
    private $nuRg;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_orgao_expedido", type="string", length=45, nullable=true)
     */
    private $dsOrgaoExpedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_expedicao", type="datetime", nullable=true)
     */
    private $dtExpedicao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_mae", type="string", length=150, nullable=true)
     */
    private $noMae;

    /**
     * @var \TbPessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;

    public function __construct(){
        $this->dtNascimento = new \DateTime();
        $this->dtExpedicao = new \DateTime();
    }

    /**
     * Get dtNascimento
     *
     * @return \DateTime
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * @return int
     */
    public function getNuCpf()
    {
        return $this->nuCpf;
    }

    /**
     * @param int $nuCpf
     */
    public function setNuCpf($nuCpf)
    {
        $this->nuCpf = $nuCpf;
    }

    /**
     * @return string
     */
    public function getNoNascionalidade()
    {
        return $this->noNascionalidade;
    }

    /**
     * @param string $noNascionalidade
     */
    public function setNoNascionalidade($noNascionalidade)
    {
        $this->noNascionalidade = $noNascionalidade;
    }

    /**
     * @return string
     */
    public function getNuRg()
    {
        return $this->nuRg;
    }

    /**
     * @param string $nuRg
     */
    public function setNuRg($nuRg)
    {
        $this->nuRg = $nuRg;
    }

    /**
     * @return string
     */
    public function getDsOrgaoExpedido()
    {
        return $this->dsOrgaoExpedido;
    }

    /**
     * @param string $dsOrgaoExpedido
     */
    public function setDsOrgaoExpedido($dsOrgaoExpedido)
    {
        $this->dsOrgaoExpedido = $dsOrgaoExpedido;
    }

    /**
     * @return \DateTime
     */
    public function getDtExpedicao()
    {
        return $this->dtExpedicao;
    }

    /**
     * @param \DateTime $dtExpedicao
     */
    public function setDtExpedicao($dtExpedicao)
    {
        $this->dtExpedicao = $dtExpedicao;
    }

    /**
     * @return string
     */
    public function getNoMae()
    {
        return $this->noMae;
    }

    /**
     * @param string $noMae
     */
    public function setNoMae($noMae)
    {
        $this->noMae = $noMae;
    }

    /**
     * Set sgSexo
     *
     * @param string $sgSexo
     * @return TbPessoaFisica
     */
    public function setSgSexo($sgSexo)
    {
        $this->sgSexo = $sgSexo;

        return $this;
    }

    /**
     * Get sgSexo
     *
     * @return string
     */
    public function getSgSexo()
    {
        return $this->sgSexo;
    }

    /**
     * Set idPessoa
     *
     * @param \Base\BaseBundle\Entity\TbPessoa $idPessoa
     * @return TbPessoaFisica
     */
    public function setIdPessoa(\Base\BaseBundle\Entity\TbPessoa $idPessoa)
    {
        $this->idPessoa = $idPessoa;

        return $this;
    }

    /**
     * Get idPessoa
     *
     * @return \Base\BaseBundle\Entity\TbPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }
}
