<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 21/01/15
 * Time: 14:14
 */

namespace Base\BaseBundle\Repository;

class UsuarioRepository extends AbstractRepository
{

    public function getVendedores()
    {
        $result = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('u.idUsuario, p.noPessoa')
            ->from('Base\BaseBundle\Entity\RlUsuarioPerfil', 'rl')
            ->innerJoin('rl.idUsuario', 'u')
            ->innerJoin('u.idPessoa', 'p')
            ->innerJoin('rl.idPerfil', 'pp')
            ->where('pp.sgPerfil = :sgPerfil')
            ->andWhere('pp.stAtivo = :stAtivo')
            ->setParameters(array(
                'sgPerfil' => 'ROLE_VENDEDOR',
                'stAtivo'  => true
            ))
            ->getQuery()
            ->getResult();

        $arrUser = array('' => 'Selecione');
        foreach ($result as $value) {
            $arrUser[$value['idUsuario']] = $value['noPessoa'];
        }

        return $arrUser;
    }
} 