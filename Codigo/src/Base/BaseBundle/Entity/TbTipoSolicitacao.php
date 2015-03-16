<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTipoSolicitacao
 *
 * @ORM\Table(name="tb_tipo_solicitacao")
 * @ORM\Entity
 */
class TbTipoSolicitacao extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_solicitacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoSolicitacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_tipo_solicitacao", type="string", length=45, nullable=false)
     */
    private $noTipoSolicitacao;

    /**
     * @return int
     */
    public function getIdTipoSolicitacao()
    {
        return $this->idTipoSolicitacao;
    }

    /**
     * @param int $idTipoSolicitacao
     */
    public function setIdTipoSolicitacao($idTipoSolicitacao)
    {
        $this->idTipoSolicitacao = $idTipoSolicitacao;
    }

    /**
     * @return string
     */
    public function getNoTipoSolicitacao()
    {
        return $this->noTipoSolicitacao;
    }

    /**
     * @param string $noTipoSolicitacao
     */
    public function setNoTipoSolicitacao($noTipoSolicitacao)
    {
        $this->noTipoSolicitacao = $noTipoSolicitacao;
    }
}

