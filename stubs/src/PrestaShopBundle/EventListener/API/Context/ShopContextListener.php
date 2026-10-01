<?php

namespace PrestaShopBundle\EventListener\API\Context;

/**
 * Listener dedicated to set up Shop context for the Back-Office/Admin application.
 */
class ShopContextListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\ShopContextBuilder $shopContextBuilder, private readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multistoreFeature, private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
