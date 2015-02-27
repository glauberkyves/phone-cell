<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbSituacao
 *
 * @ORM\Table(name="tb_situacao")
 * @ORM\Entity
 */
class TbSituacao extends AbstractEntity
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

    /**
     * @return int
     */
    public function getIdSituacao()
    {
        return $this->idSituacao;
    }

    /**
     * @return string
     */
    public function getNoSituacao()
    {
        return $this->noSituacao;
    }

    /**
     * @return int
     */
    public function getStAtivo()
    {
        return $this->stAtivo;
    }

    /**
     * @param int $stAtivo
     */
    public function setStAtivo($stAtivo)
    {
        $this->stAtivo = $stAtivo;
    }

    /**
     * @param string $noSituacao
     */
    public function setNoSituacao($noSituacao)
    {
        $this->noSituacao = $noSituacao;
    }
}