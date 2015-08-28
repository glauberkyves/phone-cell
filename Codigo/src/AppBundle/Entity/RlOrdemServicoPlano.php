<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlOrdemServicoPlano
 *
 * @ORM\Table(name="rl_ordem_servico_plano", indexes={@ORM\Index(name="id_solicitacaoplano_plano_idx", columns={"id_plano"}), @ORM\Index(name="id_solicitacaoplano_solicitacao_idx", columns={"id_ordem_servico"})})
 * @ORM\Entity
 */
class RlOrdemServicoPlano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordem_servico_plano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemServicoPlano;

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
     * @var \TbPlano
     *
     * @ORM\ManyToOne(targetEntity="TbPlano")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plano", referencedColumnName="id_plano")
     * })
     */
    private $idPlano;


}

