<?php

namespace PrestaShopBundle\Security\Admin;

/**
 * This service is able to get the logged in employee info from the Symfony sessions,
 * it is exactly doing the same thing as the internal Symfony ContextListener but "manually"
 *
 * This is useful for listeners that are executed before the ContextListener, so they
 * can init some contexts based on employee data for example.
 *
 * This should not be used in any other context, when you need to get the logged user you
 * should rely on the Symfony\Bundle\SecurityBundle\Security service instead.
 *
 * @internal
 */
class SessionEmployeeProvider
{
    use \PrestaShopBundle\Utils\SafeUnserializeTrait;
    public function __construct(private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, private readonly string $sessionKey = '_security_main')
    {
    }
    /**
     * Most of this code is inspired from the Symfony ContextListener, it's just that we need
     * to get the employee before the firewall listener in order to preset the PrestaShop contexts.
     */
    public function getEmployeeFromSession(?\Symfony\Component\HttpFoundation\Request $request = null): ?\PrestaShopBundle\Security\Admin\SessionEmployeeInterface
    {
    }
}
