<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbSituacao
 *
 * @ORM\Table(name="tb_situacao")
 * @ORM\Entity
 */
class TbSituacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_situacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSituacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_situacao", type="string", length=45, nullable=false)
     */
    private $noSituacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo;


}

