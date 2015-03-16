<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbVelocidade
 *
 * @ORM\Table(name="tb_velocidade")
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\VelocidadeRepository")
 */
class TbVelocidade extends AbstractEntity
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

    /**
     * @return int
     */
    public function getIdVelocidade()
    {
        return $this->idVelocidade;
    }

    /**
     * @param int $idVelocidade
     */
    public function setIdVelocidade($idVelocidade)
    {
        $this->idVelocidade = $idVelocidade;
    }

    /**
     * @return string
     */
    public function getNoVelocidade()
    {
        return $this->noVelocidade;
    }

    /**
     * @param string $noVelocidade
     */
    public function setNoVelocidade($noVelocidade)
    {
        $this->noVelocidade = $noVelocidade;
    }
}

