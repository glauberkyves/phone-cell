<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPacote
 *
 * @ORM\Table(name="tb_pacote")
 * @ORM\Entity
 */
class TbPacote extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pacote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPacote;

    /**
     * @var string
     *
     * @ORM\Column(name="no_pacote", type="string", length=45, nullable=false)
     */
    private $noPacote;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo;

    /**
     * @return int
     */
    public function getIdPacote()
    {
        return $this->idPacote;
    }

    /**
     * @return string
     */
    public function getNoPacote()
    {
        return $this->noPacote;
    }

    /**
     * @return int
     */
    public function getStAtivo()
    {
        return $this->stAtivo;
    }

    /**
     * @param string $noPacote
     */
    public function setNoPacote($noPacote)
    {
        $this->noPacote = $noPacote;
    }

    /**
     * @param int $stAtivo
     */
    public function setStAtivo($stAtivo)
    {
        $this->stAtivo = $stAtivo;
    }
}