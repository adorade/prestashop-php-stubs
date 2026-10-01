<?php

namespace PrestaShopBundle\EventListener\API\Context;

class ApiLegacyContextListener
{
    public function __construct(private readonly iterable $legacyBuilders)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
