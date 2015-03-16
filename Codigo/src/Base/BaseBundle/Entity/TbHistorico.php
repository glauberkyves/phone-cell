<?php

namespace Base\BaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbHistorico
 *
 * @ORM\Table(name="tb_historico", indexes={@ORM\Index(name="fk_historico_usuario_idx", columns={"id_usuario"}), @ORM\Index(name="fk_historico__idx", columns={"id_ordem_servico"}), @ORM\Index(name="fk_historico_situacao_idx", columns={"id_situacao"})})
 * @ORM\Entity(repositoryClass="Base\BaseBundle\Repository\HistoricoRepository")
 */
class TbHistorico extends AbstractEntity
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
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbOrdemServico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_servico", referencedColumnName="id_ordem_servico")
     * })
     */
    private $idOrdemServico;

    /**
     * @var \TbSituacao
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbSituacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_situacao", referencedColumnName="id_situacao")
     * })
     */
    private $idSituacao;

    /**
     * @var \TbUsuario
     *
     * @ORM\ManyToOne(targetEntity="Base\BaseBundle\Entity\TbUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    /**
     * @return int
     */
    public function getIdHistorico()
    {
        return $this->idHistorico;
    }

    /**
     * @param int $idHistorico
     */
    public function setIdHistorico($idHistorico)
    {
        $this->idHistorico = $idHistorico;
    }

    /**
     * @return \DateTime
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * @param \DateTime $dtCadastro
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    }

    /**
     * @return \TbOrdemServico
     */
    public function getIdOrdemServico()
    {
        return $this->idOrdemServico;
    }

    /**
     * @param \TbOrdemServico $idOrdemServico
     */
    public function setIdOrdemServico($idOrdemServico)
    {
        $this->idOrdemServico = $idOrdemServico;
    }

    /**
     * @return \TbSituacao
     */
    public function getIdSituacao()
    {
        return $this->idSituacao;
    }

    /**
     * @param \TbSituacao $idSituacao
     */
    public function setIdSituacao($idSituacao)
    {
        $this->idSituacao = $idSituacao;
    }

    /**
     * @return \TbUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param \TbUsuario $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
}