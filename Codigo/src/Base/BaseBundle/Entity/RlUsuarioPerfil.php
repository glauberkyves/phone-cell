<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlUsuarioPerfil
 *
 * @ORM\Table(name="rl_usuario_perfil")
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\UsuarioPerfilRepository")
 */
class RlUsuarioPerfil extends AbstractEntity
{
    /**
     * @var TbUsuario
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbUsuario", inversedBy="rlUsuarioPerfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    /**
     * @var TbImovel
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbPerfil", inversedBy="rlUsuarioPerfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_perfil", referencedColumnName="id_perfil")
     * })
     */
    private $idPerfil;

    /**
     * @param \Base\BaseBundle\Entity\TbImovel $idPerfil
     */
    public function setIdPerfil($idPerfil)
    {
        $this->idPerfil = $idPerfil;
    }

    /**
     * @return \Base\BaseBundle\Entity\TbPerfil
     */
    public function getIdPerfil()
    {
        return $this->idPerfil ? $this->idPerfil : new TbPerfil();
    }

    /**
     * @param \Base\BaseBundle\Entity\TbUsuario $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return \Base\BaseBundle\Entity\TbUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario ? $this->idUsuario : new TbUsuario();
    }
}