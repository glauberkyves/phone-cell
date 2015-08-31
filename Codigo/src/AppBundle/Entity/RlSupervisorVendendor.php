<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSupervisorVendendor
 *
 * @ORM\Table(name="rl_supervisor_vendendor", indexes={@ORM\Index(name="fk_supervisorvendendor_supervisor_idx", columns={"id_supervisor"}), @ORM\Index(name="fk_supervisorvendendor_vendedor_idx", columns={"id_vendedor"})})
 * @ORM\Entity
 */
class RlSupervisorVendendor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_supervisor_vendendor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSupervisorVendendor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_supervisor", referencedColumnName="id_usuario")
     * })
     */
    private $idSupervisor;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_usuario")
     * })
     */
    private $idVendedor;


}

