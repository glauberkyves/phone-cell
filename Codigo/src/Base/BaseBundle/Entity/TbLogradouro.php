<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLogradouro
 *
 * @ORM\Table(name="tb_logradouro", indexes={@ORM\Index(name="FK_LOGRADOURO_BAIRRO_idx", columns={"id_bairro"})})
 * @ORM\Entity
 */
class TbLogradouro extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_logradouro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLogradouro;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_logradouro", type="integer", nullable=true)
     */
    private $idTipoLogradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="no_logradouro", type="string", length=200, nullable=true)
     */
    private $noLogradouro;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cep", type="integer", nullable=false)
     */
    private $nuCep;

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
     * @return int
     */
    public function getIdLogradouro()
    {
        return $this->idLogradouro;
    }

    /**
     * @return int
     */
    public function getIdTipoLogradouro()
    {
        return $this->idTipoLogradouro;
    }

    /**
     * @return string
     */
    public function getNoLogradouro()
    {
        return $this->noLogradouro;
    }

    /**
     * @return int
     */
    public function getNuCep()
    {
        return $this->nuCep;
    }

    /**
     * @return \TbBairro
     */
    public function getIdBairro()
    {
        return $this->idBairro;
    }

    /**
     * @param int $idTipoLogradouro
     */
    public function setIdTipoLogradouro($idTipoLogradouro)
    {
        $this->idTipoLogradouro = $idTipoLogradouro;
    }

    /**
     * @param string $noLogradouro
     */
    public function setNoLogradouro($noLogradouro)
    {
        $this->noLogradouro = $noLogradouro;
    }

    /**
     * @param int $nuCep
     */
    public function setNuCep($nuCep)
    {
        $this->nuCep = $nuCep;
    }

    /**
     * @param \TbBairro $idBairro
     */
    public function setIdBairro($idBairro)
    {
        $this->idBairro = $idBairro;
    }
}