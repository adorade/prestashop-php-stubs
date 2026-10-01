<?php

namespace PrestaShopBundle\EventListener\Admin\Context;

/**
 * Listener dedicated to set up LegacyController context for the Back-Office/Admin application.
 *
 * The LegacyControllerContext is a context used for backward compatible reasons, we want to get rid
 * of the legacy Context singleton dependency, but many hooks and code still depend on it, so we propose
 * this alternative dedicated context that is mostly useful for legacy pages.
 */
class LegacyControllerContextSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\LegacyControllerContextBuilder $legacyControllerContextBuilder)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
