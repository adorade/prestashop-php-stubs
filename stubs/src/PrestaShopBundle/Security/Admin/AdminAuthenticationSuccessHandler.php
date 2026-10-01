<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * This handle is called when the employee successfully logs in to the back office, its purpose is
 * to dynamically set the route to redirect to based on the Employee's configured homepage.
 */
class AdminAuthenticationSuccessHandler implements \Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface
{
    use \Symfony\Component\Security\Http\Util\TargetPathTrait;
    public function __construct(private readonly \PrestaShopBundle\Security\Admin\EmployeeHomepageProvider $employeeHomepageProvider, private readonly \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function onAuthenticationSuccess(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token): ?\Symfony\Component\HttpFoundation\Response
    {
    }
}
