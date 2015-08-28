<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPlano
 *
 * @ORM\Table(name="tb_plano")
 * @ORM\Entity
 */
class TbPlano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_plano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlano;

    /**
     * @var string
     *
     * @ORM\Column(name="no_plano", type="string", length=45, nullable=false)
     */
    private $noPlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo;


}

