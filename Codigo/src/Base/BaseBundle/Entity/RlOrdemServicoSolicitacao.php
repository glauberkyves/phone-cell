<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlOrdemServicoSolicitacao
 *
 * @ORM\Table(name="rl_ordem_servico_solicitacao", indexes={@ORM\Index(name="fk_ordemservicosolicitacao_ordemservico_idx", columns={"id_ordem_servico"}), @ORM\Index(name="fk_ordemservicosolicitacao_solicitacao_idx", columns={"id_solicitacao"})})
 * @ORM\Entity
 */
class RlOrdemServicoSolicitacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordemservico_solicitacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemservicoSolicitacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbOrdemServico
     *
     * @ORM\OneToOne(targetEntity="TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;

    /**
     * @var \TbSolicitacao
     *
     * @ORM\ManyToOne(targetEntity="TbSolicitacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitacao", referencedColumnName="id_solicitacao")
     * })
     */
    private $idSolicitacao;


}
