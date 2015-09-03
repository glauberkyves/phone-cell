<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlOrdemServicoPacote
 *
 * @ORM\Table(name="rl_ordem_servico_pacote", indexes={@ORM\Index(name="fk_solicitacaopacote_solicitacao_idx", columns={"id_ordem_servico"}), @ORM\Index(name="fk_solicitacaopacote_pacote_idx", columns={"id_pacote"})})
 * @ORM\Entity
 */
class RlOrdemServicoPacote
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
     * @var integer
     *
     * @ORM\Column(name="st_fidelizacao", type="integer", nullable=false)
     */
    private $stFidelizacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbOrdemServico
     *
     * @ORM\ManyToOne(targetEntity="TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;

    /**
     * @var \TbPacote
     *
     * @ORM\ManyToOne(targetEntity="TbPacote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pacote", referencedColumnName="id_pacote")
     * })
     */
    private $idPacote;


}

