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
     * @var integer
     *
     * @ORM\Column(name="id_pessoa_contato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPessoaContato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbContato
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbContato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contato", referencedColumnName="id_contato")
     * })
     */
    private $idContato;

    /**
     * @var \TbPessoa
     *
     * @ORM\OneToOne(targetEntity="Base\BaseBundle\Entity\TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;


}
