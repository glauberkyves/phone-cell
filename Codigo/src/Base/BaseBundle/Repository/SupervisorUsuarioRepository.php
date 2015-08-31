<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 21/01/15
 * Time: 14:14
 */

namespace Base\BaseBundle\Repository;

use Symfony\Component\HttpFoundation\Request;

class SupervisorUsuarioRepository extends AbstractRepository
{
    public function fetchGrid(Request $request)
    {
        return $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('u.idUsuario, p.noPessoa, u.stAtivo')
            ->from('Base\BaseBundle\Entity\RlUsuarioPerfil', 'rl')
            ->innerJoin('rl.idUsuario', 'u')
            ->innerJoin('u.idPessoa', 'p')
            ->innerJoin('rl.idPerfil', 'pp')
            ->where('pp.sgPerfil = :sgPerfil')
            ->andWhere('pp.stAtivo = :stAtivo')
            ->setParameters(array(
                'sgPerfil' => 'ROLE_SUPERVISOR',
                'stAtivo'  => true
            ));
    }
} 