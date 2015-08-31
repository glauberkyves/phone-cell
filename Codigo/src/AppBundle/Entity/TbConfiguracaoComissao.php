<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbConfiguracaoComissao
 *
 * @ORM\Table(name="tb_configuracao_comissao", indexes={@ORM\Index(name="fk_configuracaocomissao_pacote_idx", columns={"id_pacote"}), @ORM\Index(name="fk_configuracaocomissao_plano_idx", columns={"id_plano"}), @ORM\Index(name="fk_configuracaocomissao_velocidade_idx", columns={"id_velocidade"})})
 * @ORM\Entity
 */
class TbConfiguracaoComissao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_configuracao_comissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfiguracaoComissao;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_valor", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $nuValor;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_interno", type="integer", nullable=false)
     */
    private $stInterno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbPacote
     *
     * @ORM\ManyToOne(targetEntity="TbPacote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pacote", referencedColumnName="id_pacote")
     * })
     */
    private $idPacote;

    /**
     * @var \TbPlano
     *
     * @ORM\ManyToOne(targetEntity="TbPlano")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plano", referencedColumnName="id_plano")
     * })
     */
    private $idPlano;

    /**
     * @var \TbVelocidade
     *
     * @ORM\ManyToOne(targetEntity="TbVelocidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_velocidade", referencedColumnName="id_velocidade")
     * })
     */
    private $idVelocidade;


}

