<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSupervisorVendendor
 *
 * @ORM\Table(name="rl_supervisor_vendendor", indexes={@ORM\Index(name="fk_supervisorvendendor_supervisor_idx", columns={"id_supervisor"}), @ORM\Index(name="fk_supervisorvendendor_vendedor_idx", columns={"id_vendedor"})})
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\SupervisorUsuarioRepository")
 */
class RlSupervisorVendendor extends AbstractEntity
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
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_supervisor", referencedColumnName="id_usuario")
     * })
     */
    private $idSupervisor;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_usuario")
     * })
     */
    private $idVendedor;

    /**
     * @return int
     */
    public function getIdSupervisorVendendor()
    {
        return $this->idSupervisorVendendor;
    }

    /**
     * @param int $idSupervisorVendendor
     */
    public function setIdSupervisorVendendor($idSupervisorVendendor)
    {
        $this->idSupervisorVendendor = $idSupervisorVendendor;
    }

    /**
     * @return int
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @param int $dtCadastro
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    }

    /**
     * @return \TbUsuario
     */
    public function getIdSupervisor()
    {
        return $this->idSupervisor;
    }

    /**
     * @param \TbUsuario $idSupervisor
     */
    public function setIdSupervisor($idSupervisor)
    {
        $this->idSupervisor = $idSupervisor;
    }

    /**
     * @return \TbUsuario
     */
    public function getIdVendedor()
    {
        return $this->idVendedor;
    }

    /**
     * @param \TbUsuario $idVendedor
     */
    public function setIdVendedor($idVendedor)
    {
        $this->idVendedor = $idVendedor;
    }


}

