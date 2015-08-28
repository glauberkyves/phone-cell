<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbInstalacao
 *
 * @ORM\Table(name="tb_instalacao")
 * @ORM\Entity
 */
class TbInstalacao
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


}

