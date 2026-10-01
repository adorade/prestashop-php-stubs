<?php

namespace PrestaShopBundle\EventListener\API\Context;

/**
 * Listener dedicated to set up ApiClient context for the Back-Office/Admin application.
 */
class ApiClientContextListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\ApiClientContextBuilder $accessContextBuilder, private readonly \Symfony\Component\Security\Core\Security $security)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
