<?php

namespace PrestaShopBundle\EventListener;

class UserLocaleListener
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\LegacyContext $context
     * @param \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\LegacyContext $context, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository)
    {
    }
    /**
     * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
     *
     * @return void
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
