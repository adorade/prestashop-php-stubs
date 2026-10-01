<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This class is independent of the LegacyControllerContextBuilder, this way wa can inject LegacyControllerContext
 * into it and use the lazyness of the service in our favor. This service will be called via the kernel.controller
 * event from LegacyContextListener, by then LegacyControllerContextBuilder will have already been configured and
 * the service can be lazy constructed.
 *
 * We must rely on the lazy Symfony service and inject this one in particular or the service used in Symfony and the
 * one injected in legacy context won't be the same instance thus we wouldn't get the appropriate assets.
 */
class LegacyControllerContextInjector implements \PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager, private readonly \PrestaShop\PrestaShop\Core\Context\LegacyControllerContext $legacyControllerContext)
    {
    }
    public function buildLegacyContext(): void
    {
    }
}
