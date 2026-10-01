<?php

namespace PrestaShopBundle\Controller\Admin;

/**
 * Security warning controller
 */
class SecurityController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public function __construct(private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $tokenManager, private readonly \Symfony\Component\Validator\Validator\ValidatorInterface $validator, private readonly \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    public function compromisedAccessAction(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}
