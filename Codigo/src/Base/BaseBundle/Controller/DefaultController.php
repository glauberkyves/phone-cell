<?php

namespace Base\BaseBundle\Controller;

use Base\CrudBundle\Controller\CrudController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends CrudController
{
    protected $serviceName = '';

    public function getMunicipiosAction(Request $request)
    {
        $arrMunicipio = $this->getService('service.municipio')->findByIdEstado(
            $request->get('estado', 0),
            array(
                'noMunicipio' => 'asc'
            )
        );

        $arrResult = array();
        foreach ($arrMunicipio as $municipio) {
            $arrResult[$municipio->getIdMunicipio()] = $municipio->getNoMunicipio();
        }

        return $this->renderJson($arrResult);
    }

    public function getBairrosAction(Request $request)
    {
        $arrBairros = $this->getService('service.bairro')->findByIdMunicipio(
            $request->get('municipio', 0),
            array(
                'noBairro' => 'asc'
            )
        );

        $arrResult = array();
        foreach ($arrBairros as $bairro) {
            $arrResult[$bairro->getIdBairro()] = $bairro->getNoBairro();
        }

        return $this->renderJson($arrResult);
    }

    public function faleConoscoAction(Request $request)
    {
        $this->serviceName = 'service.newsletter';

        if ($request->isMethod('post') && $this->validate()) {
            $this->save();
        }

        return $this->render('BaseBaseBundle:Default:faleConosco.html.twig');
    }
}
