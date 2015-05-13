<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 21/01/15
 * Time: 14:14
 */

namespace Base\BaseBundle\Repository;

use Symfony\Component\HttpFoundation\Request;

class OrdemServicoRepository extends AbstractRepository
{
    public function fetchGrid(Request $request)
    {
        $query = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select(
                'DISTINCT o.idOrdemServico, p.idPessoa, p.noPessoa, pf.nuCpf, to.idTipoOrdemServico, '
                . 'to.noTipoOrdemServico, s.idSituacao, s.noSituacao, o.noUrl')
            ->from($this->_entityName, 'o')
            ->innerJoin('o.idTipoOrdemServico', 'to')
            ->innerJoin('o.idPessoa', 'p')
            ->innerJoin('p.idPessoaFisica', 'pf')
            ->innerJoin('o.idSituacao', 's');

        if ($request->get('idSituacao')) {
            $query->where('s.idSituacao = :idSituacao')
                ->setParameter('idSituacao', $request->get('idSituacao'));
        }

        return $query;
    }
} 