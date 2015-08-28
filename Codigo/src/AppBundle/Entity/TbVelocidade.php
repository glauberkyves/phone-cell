<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbVelocidade
 *
 * @ORM\Table(name="tb_velocidade")
 * @ORM\Entity
 */
class TbVelocidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_velocidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVelocidade;

    /**
     * @var string
     *
     * @ORM\Column(name="no_velocidade", type="string", length=45, nullable=false)
     */
    private $noVelocidade;


}

