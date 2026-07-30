<?php

namespace PrestaShopBundle\EventListener;

class UserLocaleListener
{
    /**
     * @param LegacyContext $context
     * @param ShopConfigurationInterface $configuration
     * @param LanguageRepositoryInterface $langRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository)
    {
    }
    /**
     * @param RequestEvent $event
     *
     * @return void
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
