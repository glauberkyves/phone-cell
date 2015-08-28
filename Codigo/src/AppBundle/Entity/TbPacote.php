<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPacote
 *
 * @ORM\Table(name="tb_pacote")
 * @ORM\Entity
 */
class TbPacote
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


}

