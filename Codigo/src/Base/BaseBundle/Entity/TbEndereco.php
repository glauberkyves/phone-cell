<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEndereco
 *
 * @ORM\Table(name="tb_endereco", indexes={@ORM\Index(name="fk_endereco_municipio_idx", columns={"id_municipio"}), @ORM\Index(name="fk_endereco_bairro_idx", columns={"id_bairro"})})
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\EnderecoRepository")
 */
class TbEndereco extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="no_bairro", type="string", length=100, nullable=true)
     */
    private $noBairro;

    /**
     * @var string
     *
     * @ORM\Column(name="no_logradouro", type="string", length=150, nullable=false)
     */
    private $noLogradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_endereco", type="string", length=45, nullable=false)
     */
    private $nuEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_complemento", type="string", length=100, nullable=true)
     */
    private $dsComplemento;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cep", type="integer", nullable=true)
     */
    private $nuCep;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_referencia", type="string", length=150, nullable=true)
     */
    private $dsReferencia;

    /**
     * @var \TbBairro
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbBairro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bairro", referencedColumnName="id_bairro")
     * })
     */
    private $idBairro;

    /**
     * @var \TbMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id_municipio")
     * })
     */
    private $idMunicipio;


    /**
     * @param \TbBairro $idBairro
     */
    public function setIdBairro(TbBairro $idBairro)
    {
        $this->idBairro = $idBairro;
    }

    /**
     * @return \TbBairro
     */
    public function getIdBairro()
    {
        return $this->idBairro ? $this->idBairro : new TbBairro();
    }

    /**
     * @param \TbMunicipio $idMunicipio
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;
    }

    /**
     * @return \TbMunicipio
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio ? $this->idMunicipio : new TbMunicipio();
    }

    /**
     * @return int
     */
    public function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * @param string $noBairro
     */
    public function setNoBairro($noBairro)
    {
        $this->noBairro = $noBairro;
    }

    /**
     * @return string
     */
    public function getNoBairro()
    {
        return $this->noBairro;
    }

    /**
     * @param string $noComplemento
     */
    public function setNoComplemento($noComplemento)
    {
        $this->noComplemento = $noComplemento;
    }

    /**
     * @return string
     */
    public function getNoComplemento()
    {
        return $this->noComplemento;
    }

    /**
     * @param string $noLogradouro
     */
    public function setNoLogradouro($noLogradouro)
    {
        $this->noLogradouro = $noLogradouro;
    }

    /**
     * @return string
     */
    public function getNoLogradouro()
    {
        return $this->noLogradouro;
    }

    /**
     * @param int $nuCep
     */
    public function setNuCep($nuCep)
    {
        $this->nuCep = $nuCep;
    }

    /**
     * @return int
     */
    public function getNuCep()
    {
        return $this->nuCep;
    }

    /**
     * @param string $nuEndereco
     */
    public function setNuEndereco($nuEndereco)
    {
        $this->nuEndereco = $nuEndereco;
    }

    /**
     * @return string
     */
    public function getNuEndereco()
    {
        return $this->nuEndereco;
    }
}