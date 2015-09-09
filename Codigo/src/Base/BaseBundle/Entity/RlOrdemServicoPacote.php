<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlOrdemServicoPacote
 *
 * @ORM\Table(name="rl_ordem_servico_pacote", indexes={@ORM\Index(name="fk_solicitacaopacote_solicitacao_idx", columns={"id_ordem_servico"}), @ORM\Index(name="fk_solicitacaopacote_pacote_idx", columns={"id_pacote"})})
 * @ORM\Entity
 */
class RlOrdemServicoPacote extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordem_servico_pacote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemServicoPacote;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbOrdemServico
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;

    /**
     * @var \TbPacote
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbPacote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pacote", referencedColumnName="id_pacote")
     * })
     */
    private $idPacote;

    /**
     * @return int
     */
    public function getIdOrdemServicoPacote()
    {
        return $this->idOrdemServicoPacote;
    }

    /**
     * @param int $idOrdemServicoPacote
     */
    public function setIdOrdemServicoPacote($idOrdemServicoPacote)
    {
        $this->idOrdemServicoPacote = $idOrdemServicoPacote;
    }

    /**
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @param \DateTime $dtCadastro
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    }

    /**
     * @return \TbOrdemServico
     */
    public function getIdOrdemServico()
    {
        return $this->idOrdemServico;
    }

    /**
     * @param \TbOrdemServico $idOrdemServico
     */
    public function setIdOrdemServico($idOrdemServico)
    {
        $this->idOrdemServico = $idOrdemServico;
    }

    /**
     * @return \TbPacote
     */
    public function getIdPacote()
    {
        return $this->idPacote;
    }

    /**
     * @param \TbPacote $idPacote
     */
    public function setIdPacote($idPacote)
    {
        $this->idPacote = $idPacote;
    }


}

