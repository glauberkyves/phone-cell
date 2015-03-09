<?php

namespace Super\UsuarioBundle\Controller;

use Base\BaseBundle\Entity\AbstractEntity;
use Base\BaseBundle\Service\Dominio;
use Base\CrudBundle\Controller\CrudController;
use Super\UsuarioBundle\Service\Perfil;
use Symfony\Component\HttpFoundation\Request;

class PerfilController extends CrudController
{
    /**
     * @var Perfil
     */
    protected $serviceName = 'service.perfil';

    public function indexAction(Request $request)
    {
        $this->vars['cmbStAtivo'] = Dominio::getStAtivo();

        return parent::indexAction($request);
    }

    public function editAction(Request $request)
    {
        $this->vars['cmbStAtivo'] = Dominio::getStAtivo();

        return parent::editAction($request);
    }

    public function validate(AbstractEntity $entity = null)
    {
        if (!$this->getRequest()->get('idPerfil') && !$this->getRequest()->get('sgPerfil')) {
            $this->addMessage('usuario_bundle.validators.perfil.semSigla', 'error');
        }

        return parent::validate($entity);
    }
}
