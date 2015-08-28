<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEndereco
 *
 * @ORM\Table(name="tb_endereco", indexes={@ORM\Index(name="fk_endereco_municipio_idx", columns={"id_municipio"}), @ORM\Index(name="fk_endereco_bairro_idx", columns={"id_bairro"}), @ORM\Index(name="fk_endereco_pessoa_idx", columns={"id_pessoa"})})
 * @ORM\Entity
 */
class TbEndereco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="no_bairro", type="string", length=100, nullable=true)
     */
    private $noBairro;

    /**
     * @var string
     *
     * @ORM\Column(name="no_logradouro", type="string", length=150, nullable=false)
     */
    private $noLogradouro;

    /**
     * @var string
     *
     * @ORM\Column(name="nu_endereco", type="string", length=45, nullable=false)
     */
    private $nuEndereco;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_complemento", type="string", length=100, nullable=true)
     */
    private $dsComplemento;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cep", type="integer", nullable=true)
     */
    private $nuCep;

    /**
     * @var string
     *
     * @ORM\Column(name="ds_referencia", type="string", length=150, nullable=true)
     */
    private $dsReferencia;

    /**
     * @var \TbBairro
     *
     * @ORM\ManyToOne(targetEntity="TbBairro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bairro", referencedColumnName="id_bairro")
     * })
     */
    private $idBairro;

    /**
     * @var \TbMunicipio
     *
     * @ORM\ManyToOne(targetEntity="TbMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id_municipio")
     * })
     */
    private $idMunicipio;

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

