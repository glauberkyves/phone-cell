<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbHistorico
 *
 * @ORM\Table(name="tb_historico", indexes={@ORM\Index(name="fk_historico_usuario_idx", columns={"id_usuario"}), @ORM\Index(name="fk_historico__idx", columns={"id_ordem_servico"}), @ORM\Index(name="fk_historico_situacao_idx", columns={"id_situacao"})})
 * @ORM\Entity
 */
class TbHistorico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_historico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistorico;

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
     * @var \TbSituacao
     *
     * @ORM\ManyToOne(targetEntity="TbSituacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_situacao", referencedColumnName="id_situacao")
     * })
     */
    private $idSituacao;

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
