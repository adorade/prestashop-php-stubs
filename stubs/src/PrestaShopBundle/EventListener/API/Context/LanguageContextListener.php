<?php

namespace PrestaShopBundle\EventListener\API\Context;

/**
 * Listener dedicated to set up Language context for the Back-Office/Admin application.
 */
class LanguageContextListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContextBuilder $languageContextBuilder, private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
