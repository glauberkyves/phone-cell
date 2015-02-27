<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlSolicitacaoInstalacao
 *
 * @ORM\Table(name="rl_solicitacao_instalacao", indexes={@ORM\Index(name="fk_solicitacaoinstalacao_solicitacao_idx", columns={"id_solicitacao"}), @ORM\Index(name="fk_solicitacaoinstalacao_instalacao_idx", columns={"id_instalacao"})})
 * @ORM\Entity
 */
class RlSolicitacaoInstalacao
{
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
     * @var \TbSolicitacao
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TbSolicitacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_solicitacao", referencedColumnName="id_solicitacao")
     * })
     */
    private $idSolicitacao;


}
