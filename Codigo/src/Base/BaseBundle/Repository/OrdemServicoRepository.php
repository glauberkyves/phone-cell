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
        return  $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('p.idPessoa, p.noPessoa, pf.nuCpf')
            ->from($this->_entityName, 'o')
            ->innerJoin('o.idPessoa', 'p')
            ->innerJoin('p.idPessoaFisica', 'pf');
    }
} 