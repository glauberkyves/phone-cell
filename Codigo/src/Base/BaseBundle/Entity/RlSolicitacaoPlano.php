<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSolicitacaoPlano
 *
 * @ORM\Table(name="rl_solicitacao_plano", indexes={@ORM\Index(name="id_solicitacaoplano_solicitacao_idx", columns={"id_solicitacao"}), @ORM\Index(name="id_solicitacaoplano_plano_idx", columns={"id_plano"})})
 * @ORM\Entity
 */
class RlSolicitacaoPlano
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solicitacao_plano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolicitacaoPlano;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_adicional", type="integer", nullable=false)
     */
    private $stAdicional = '0';

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
     * @var \TbSolicitacao
     *
     * @ORM\OneToOne(targetEntity="TbSolicitacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitacao", referencedColumnName="id_solicitacao")
     * })
     */
    private $idSolicitacao;


}
