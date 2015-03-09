<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbInstalacao
 *
 * @ORM\Table(name="tb_instalacao")
 * @ORM\Entity
 */
class TbInstalacao extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_instalacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInstalacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_instalacao", type="datetime", nullable=true)
     */
    private $dtInstalacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_periodo_instalacao", type="string", length=45, nullable=true)
     */
    private $noPeriodoInstalacao;

    /**
     * @return int
     */
    public function getIdInstalacao()
    {
        return $this->idInstalacao;
    }

    /**
     * @param int $idInstalacao
     */
    public function setIdInstalacao($idInstalacao)
    {
        $this->idInstalacao = $idInstalacao;
    }

    /**
     * @return \DateTime
     */
    public function getDtInstalacao()
    {
        return $this->dtInstalacao;
    }

    /**
     * @param \DateTime $dtInstalacao
     */
    public function setDtInstalacao($dtInstalacao)
    {
        $this->dtInstalacao = $dtInstalacao;
    }

    /**
     * @return string
     */
    public function getNoPeriodoInstalacao()
    {
        return $this->noPeriodoInstalacao;
    }

    /**
     * @param string $noPeriodoInstalacao
     */
    public function setNoPeriodoInstalacao($noPeriodoInstalacao)
    {
        $this->noPeriodoInstalacao = $noPeriodoInstalacao;
    }


}
