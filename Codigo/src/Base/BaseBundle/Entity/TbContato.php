<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContato
 *
 * @ORM\Table(name="tb_contato")
 * @ORM\Entity
 */
class TbContato extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContato;

    /**
     * @var string
     *
     * @ORM\Column(name="no_contato", type="string", length=100, nullable=true)
     */
    private $noContato;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_telefone", type="integer", nullable=true)
     */
    private $nuTelefone;

    /**
     * @var \TbPessoa
     *
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;

    /**
     * @return int
     */
    public function getIdContato()
    {
        return $this->idContato;
    }

    /**
     * @param int $idContato
     */
    public function setIdContato($idContato)
    {
        $this->idContato = $idContato;
    }

    /**
     * @return string
     */
    public function getNoContato()
    {
        return $this->noContato;
    }

    /**
     * @param string $noContato
     */
    public function setNoContato($noContato)
    {
        $this->noContato = $noContato;
    }

    /**
     * @return int
     */
    public function getNuTelefone()
    {
        return $this->nuTelefone;
    }

    /**
     * @param int $nuTelefone
     */
    public function setNuTelefone($nuTelefone)
    {
        $this->nuTelefone = $nuTelefone;
    }

    /**
     * @return \TbPessoa
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param \TbPessoa $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }


}
