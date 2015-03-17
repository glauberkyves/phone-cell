<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTipoOrdemServico
 *
 * @ORM\Table(name="tb_tipo_ordem_servico")
 * @ORM\Entity
 */
class TbTipoOrdemServico extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_ordem_servico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoOrdemServico;

    /**
     * @var string
     *
     * @ORM\Column(name="no_tipo_ordem_servico", type="string", length=45, nullable=false)
     */
    private $noTipoOrdemServico;

    /**
     * @return int
     */
    public function getIdTipoOrdemServico()
    {
        return $this->idTipoOrdemServico;
    }

    /**
     * @param int $idTipoOrdemServico
     */
    public function setIdTipoOrdemServico($idTipoOrdemServico)
    {
        $this->idTipoOrdemServico = $idTipoOrdemServico;
    }

    /**
     * @return string
     */
    public function getNoTipoOrdemServico()
    {
        return $this->noTipoOrdemServico;
    }

    /**
     * @param string $noTipoOrdemServico
     */
    public function setNoTipoOrdemServico($noTipoOrdemServico)
    {
        $this->noTipoOrdemServico = $noTipoOrdemServico;
    }
}

