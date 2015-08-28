<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbComissao
 *
 * @ORM\Table(name="tb_comissao", indexes={@ORM\Index(name="fk_comissao_usuairo_idx", columns={"id_usuario"}), @ORM\Index(name="fk_comissao_ordemservico_idx", columns={"id_ordem_servico"})})
 * @ORM\Entity
 */
class TbComissao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComissao;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $nuValor;

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
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


}

