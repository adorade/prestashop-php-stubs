<?php

namespace PrestaShopBundle\EventListener\Admin\Context;

/**
 * Listener dedicated to set up Country context for the Back-Office/Admin application.
 */
class CountryContextSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Priority higher than Symfony router listener (which is 32)
     */
    public const BEFORE_ROUTER_PRIORITY = 33;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\CountryContextBuilder $countryContextBuilder, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
