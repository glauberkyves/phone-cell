<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSolicitacaoPacote
 *
 * @ORM\Table(name="rl_solicitacao_pacote", indexes={@ORM\Index(name="fk_solicitacaopacote_solicitacao_idx", columns={"id_solicitacao"}), @ORM\Index(name="fk_solicitacaopacote_pacote_idx", columns={"id_pacote"})})
 * @ORM\Entity
 */
class RlSolicitacaoPacote
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solicitacao_pacote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolicitacaoPacote;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_fidelizacao", type="integer", nullable=false)
     */
    private $stFidelizacao = '0';

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
     * @var \TbSolicitacao
     *
     * @ORM\OneToOne(targetEntity="TbSolicitacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitacao", referencedColumnName="id_solicitacao")
     * })
     */
    private $idSolicitacao;


}
