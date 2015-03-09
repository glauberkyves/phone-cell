<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 21/01/15
 * Time: 14:14
 */

namespace Base\BaseBundle\Repository;

class EstadoRepository extends AbstractRepository
{
    public function getEstadoBrowser($estado)
    {
        $result = $this
            ->createQueryBuilder('e')
            ->where('e.noEstado LIKE :noEstado')
            ->setParameter(':noEstado', '%' . $estado . '%')
            ->getQuery()
            ->getArrayResult();

        if ($result) {
            $result[0]['noEstado'] = str_replace(' ', '-', $result[0]['noEstado']);

            return $result[0];
        }

        return false;
    }
} 