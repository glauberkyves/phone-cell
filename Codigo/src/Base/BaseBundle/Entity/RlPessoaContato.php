<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlPessoaContato
 *
 * @ORM\Table(name="rl_pessoa_contato", indexes={@ORM\Index(name="fk_pessoacontato_pessoa_idx", columns={"id_pessoa"}), @ORM\Index(name="fk_pessoacontato_contato_idx", columns={"id_contato"})})
 * @ORM\Entity
 */
class RlPessoaContato
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbContato
     *
     * @ORM\ManyToOne(targetEntity="TbContato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contato", referencedColumnName="id_contato")
     * })
     */
    private $idContato;

    /**
     * @var \TbPessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;


}
