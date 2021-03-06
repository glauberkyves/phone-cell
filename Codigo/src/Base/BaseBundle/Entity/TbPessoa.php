<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TbPessoa
 *
 * @ORM\Table(name="tb_pessoa")
 * @ORM\Entity
 */
class TbPessoa extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pessoa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPessoa;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="usuario_bundle.validators.pessoa_fisica.noPessoa.notBlank")
     * @ORM\Column(name="no_pessoa", type="string", length=150, nullable=false)
     */
    private $noPessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_atualizacao", type="datetime", nullable=true)
     */
    private $dtAtualizacao;

    /**
     * @var TbPessoaFisica
     *
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbPessoaFisica", mappedBy="idPessoa")
     */
    protected $idPessoaFisica;

    /**
     * @var TbEndereco
     *
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbEndereco", mappedBy="idPessoa")
     */
    protected $idEndereco;

    /**
     * @param int $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }

    /**
     * Get idPessoa
     *
     * @return integer
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * Set stAtivo
     *
     * @param integer $stAtivo
     * @return TbPessoa
     */
    public function setStAtivo($stAtivo)
    {
        $this->stAtivo = $stAtivo;

        return $this;
    }

    /**
     * Set noPessoa
     *
     * @param string $noPessoa
     * @return TbPessoaFisica
     */
    public function setNoPessoa($noPessoa)
    {
        $this->noPessoa = $noPessoa;

        return $this;
    }

    /**
     * Get noPessoa
     *
     * @return string
     */
    public function getNoPessoa($firstName = false)
    {
        if ($firstName) {
            return substr($this->noPessoa, 0, strpos($this->noPessoa, ' ')) ?: $this->noPessoa;
        }

        return $this->noPessoa;
    }

    /**
     * Get stAtivo
     *
     * @return integer
     */
    public function getStAtivo()
    {
        return $this->stAtivo;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return TbPessoa
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;

        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set dtAtualizacao
     *
     * @param \DateTime $dtAtualizacao
     * @return TbPessoa
     */
    public function setDtAtualizacao($dtAtualizacao)
    {
        $this->dtAtualizacao = $dtAtualizacao;

        return $this;
    }

    /**
     * Get dtAtualizacao
     *
     * @return \DateTime
     */
    public function getDtAtualizacao()
    {
        return $this->dtAtualizacao;
    }

    /**
     * @return \Base\BaseBundle\Entity\TbPessoaFisica
     */
    public function getIdPessoaFisica()
    {
        return $this->idPessoaFisica ? $this->idPessoaFisica : new TbPessoaFisica();
    }

    /**
     * @return \Base\BaseBundle\Entity\TbEndereco
     */
    public function getIdEndereco()
    {
        return $this->idEndereco ? $this->idEndereco : new TbEndereco();
    }

    /**
     * @return TbPessoa
     */
    public function setIdPessoaFisica(\Base\BaseBundle\Entity\TbPessoaFisica $idPessoaFisica)
    {
        $this->idPessoaFisica = $idPessoaFisica;

        return $this;
    }

    /**
     * @return TbPessoa
     */
    public function setIdEndereco(\Base\BaseBundle\Entity\TbEndereco $idEndereco)
    {
        $this->idEndereco = $idEndereco;

        return $this;
    }

}
