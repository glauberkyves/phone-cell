<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPlano
 *
 * @ORM\Table(name="tb_plano")
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\PlanoRepository")
 */
class TbPlano extends AbstractEntity
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

    /**
     * @return int
     */
    public function getIdPlano()
    {
        return $this->idPlano;
    }

    /**
     * @param int $idPlano
     */
    public function setIdPlano($idPlano)
    {
        $this->idPlano = $idPlano;
    }

    /**
     * @return string
     */
    public function getNoPlano()
    {
        return $this->noPlano;
    }

    /**
     * @return int
     */
    public function getStAtivo()
    {
        return $this->stAtivo;
    }

    /**
     * @param string $noPlano
     */
    public function setNoPlano($noPlano)
    {
        $this->noPlano = $noPlano;
    }

    /**
     * @param int $stAtivo
     */
    public function setStAtivo($stAtivo)
    {
        $this->stAtivo = $stAtivo;
    }


}