<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 20/01/15
 * Time: 16:25
 */

namespace Base\CrudBundle\Service;

use Base\BaseBundle\Service\AbstractService;
use Knp\Component\Pager\Paginator;
use Symfony\Component\HttpFoundation\Request;

class CrudService extends AbstractService
{
    public function getResultGrid(Request $request)
    {
        $result = $this->getRepository()->getResultGrid($request);

        $sEcho = $request->query->get('sEcho');
        $page  = $request->query->get('iDisplayStart', 1);
        $rows  = $request->query->get('iDisplayLength', 10);

        $paginator  = new Paginator();
        $pagination = $paginator->paginate($result, $page, $rows);

        $data                       = new \StdClass();
        $data->sEcho                = $sEcho;
        $data->iTotalRecords        = $page;
        $data->iTotalDisplayRecords = ceil($pagination->getTotalItemCount() / $rows);
        $data->records              = $pagination->getTotalItemCount();
        $data->aaData               = $this->parserItens($pagination->getItems());

        return (array)$data;
    }

    public function parserItens(array $itens = array())
    {
        foreach ($itens as $key => $value) {
            foreach ($value as $keyIten => $iten) {
                switch (true) {
                    case $iten instanceof \DateTime:
                        $itens[$key][$keyIten] = $iten->format('d/m/Y');
                        break;
                    case $keyIten == 'stAtivo':
                        $itens[$key][$keyIten] = $iten == 1 ? 'Ativo' : 'Inativo';
                        break;
                }
            }
        }

        return $itens;
    }
}