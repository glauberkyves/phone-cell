<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RlPessoaEndereco
 *
 * @ORM\Table(name="rl_pessoa_endereco", indexes={@ORM\Index(name="fk_solicitacaoendereco_solicitacao_idx", columns={"id_endereco"}), @ORM\Index(name="fk_pessoaendereco_pessoa_idx", columns={"id_pessoa"})})
 * @ORM\Entity
 */
class RlPessoaEndereco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pessoa_endereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPessoaEndereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="st_endereco_cobranca", type="integer", nullable=false)
     */
    private $stEnderecoCobranca = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="datetime", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \TbEndereco
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbEndereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_endereco", referencedColumnName="id_endereco")
     * })
     */
    private $idEndereco;

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
