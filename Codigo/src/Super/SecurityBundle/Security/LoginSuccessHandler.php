<?php

namespace Super\SecurityBundle\Security;

use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{

    protected $router;
    protected $security;

    public function __construct(Router $router, SecurityContext $security)
    {
        $this->router   = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        switch(true){
            case $this->security->isGranted('ROLE_VENDEDOR'):
                $response = new RedirectResponse($this->router->generate('super_ordem_servico_oi_fixo'));
                break;

            case $this->security->isGranted('ROLE_AUDITOR'):
                $response = new RedirectResponse($this->router->generate('super_home'));
                break;

            case $this->security->isGranted('ROLE_IMPUTADOR'):
                $response = new RedirectResponse($this->router->generate('super_home'));
                break;

            case $this->security->isGranted('ROLE_ACOMPANHADOR'):
                $response = new RedirectResponse($this->router->generate('super_home'));
                break;

            case $this->security->isGranted('ROLE_GERENTE'):
                $response = new RedirectResponse($this->router->generate('super_home'));
                break;

        }

        return $response;
    }

}