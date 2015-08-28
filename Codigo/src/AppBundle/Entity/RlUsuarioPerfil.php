<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlUsuarioPerfil
 *
 * @ORM\Table(name="rl_usuario_perfil", indexes={@ORM\Index(name="FK_USUAIROPERFIL_PERFIL_idx", columns={"id_perfil"}), @ORM\Index(name="fk_usuarioperfil_usuario_idx", columns={"id_usuario"})})
 * @ORM\Entity
 */
class RlUsuarioPerfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuario_perfil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuarioPerfil;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_ativo", type="integer", nullable=false)
     */
    private $stAtivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbPerfil
     *
     * @ORM\ManyToOne(targetEntity="TbPerfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_perfil", referencedColumnName="id_perfil")
     * })
     */
    private $idPerfil;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


}

