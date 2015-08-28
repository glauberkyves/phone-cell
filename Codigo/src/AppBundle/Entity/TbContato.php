<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContato
 *
 * @ORM\Table(name="tb_contato", indexes={@ORM\Index(name="fk_contato_pessoa_idx", columns={"id_pessoa"})})
 * @ORM\Entity
 */
class TbContato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_contato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContato;

    /**
     * @var string
     *
     * @ORM\Column(name="no_contato", type="string", length=100, nullable=true)
     */
    private $noContato;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_telefone", type="integer", nullable=true)
     */
    private $nuTelefone;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_fixo", type="integer", nullable=false)
     */
    private $stFixo;

    /**
     * @var \TbPessoa
     *
     * @ORM\ManyToOne(targetEntity="TbPessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;


}

