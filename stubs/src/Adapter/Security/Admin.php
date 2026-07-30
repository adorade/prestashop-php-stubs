<?php

namespace PrestaShop\PrestaShop\Adapter\Security;

/**
 * Admin Middleware security.
 */
class Admin
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $securityTokenStorage, \Symfony\Component\Security\Core\User\UserProviderInterface $userProvider, \Symfony\Component\Security\Core\Security $security)
    {
    }
    /**
     * Check if employee is logged in
     * If not logged in, redirect to admin home page.
     *
     * @param RequestEvent $event
     *
     * @return bool or redirect
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event)
    {
    }
}
