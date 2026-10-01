<?php

namespace PrestaShopBundle\EventListener\Admin;

/**
 * This class allows to redirect to back url.
 */
final class BackUrlRedirectResponseListener
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider $backUrlProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Util\Url\BackUrlProvider $backUrlProvider, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    public function onKernelResponse(\Symfony\Component\HttpKernel\Event\ResponseEvent $event)
    {
    }
}
