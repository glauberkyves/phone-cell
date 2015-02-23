<?php

namespace Super\SecurityBundle\Controller;

use Base\CrudBundle\Controller\CrudController;
use Super\UsuarioBundle\Service\Usuario;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\Security\Core\Event\AuthenticationEvent;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends CrudController
{
    /**
     * @var Usuario
     */
    protected $serviceName = 'super_security_bundle.usuario';
    protected $provider, $authenticator;

    /**
     * @return RedirectResponse
     */
    public function authenticateAction(Request $request)
    {
        $this->provider      = $this->getService('security_provider');
        $this->authenticator = $this->getService('authenticator');
        $username            = $request->request->get('noEmail');
        $password            = $request->request->get('noSenha');
        $csrf                = $request->request->get('_csrf_token');

        $token = $this
            ->authenticator
            ->createToken($request, $username, $password, Usuario::PROVIDER_AUTH);

        $userToken = $this
            ->authenticator
            ->authenticateToken($token, $this->provider, Usuario::PROVIDER_AUTH);

        if (!$userToken) {
            $this->addMessage('usuario_bundle.validators.usuario.invalidLogin', 'error');

        } else {
            $this->get("security.token_storage")->setToken($userToken);
            $this->get('session')->set('_security_main', serialize($token));
            $this->get('event_dispatcher')->dispatch(
                AuthenticationEvents::AUTHENTICATION_SUCCESS,
                new AuthenticationEvent($userToken)
            );
        }

        return new RedirectResponse($this->generateUrl('home_page'));
    }

    public function logoutAction(Request $request)
    {
        $this->container->get('security.context')->setToken(null);

        return $this->redirect($this->generateUrl('home_page'));
    }

    public function loginAction(Request $request)
    {
        return $this->render($this->resolveRouteName(), array(
            'error' => $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR)
        ));
    }
}
