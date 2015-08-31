<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlOrdemServicoInstalacao
 *
 * @ORM\Table(name="rl_ordem_servico_instalacao", indexes={@ORM\Index(name="fk_solicitacaoinstalacao_instalacao_idx", columns={"id_instalacao"}), @ORM\Index(name="fk_solicitacaoinstalacao_solicitacao_idx", columns={"id_ordem_servico"})})
 * @ORM\Entity
 */
class RlOrdemServicoInstalacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordem_servico_instalacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemServicoInstalacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_segunda_opcao", type="integer", nullable=false)
     */
    private $stSegundaOpcao = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbInstalacao
     *
     * @ORM\ManyToOne(targetEntity="TbInstalacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_instalacao", referencedColumnName="id_instalacao")
     * })
     */
    private $idInstalacao;

    /**
     * @var \TbOrdemServico
     *
     * @ORM\ManyToOne(targetEntity="TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;


}

