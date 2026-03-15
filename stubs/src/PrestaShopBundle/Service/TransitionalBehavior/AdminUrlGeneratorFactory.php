<?php

namespace PrestaShopBundle\Service\TransitionalBehavior;

/**
 * Factory to return a UrlGeneratorInterface.
 * Either the base generator from Symfony (the Router class instance)
 * Either an Adapter for Admin legacy controllers.
 */
class AdminUrlGeneratorFactory
{
    /**
     * Constructor.
     *
     * @param Router $router
     */
    public function __construct(\Symfony\Component\Routing\Router $router)
    {
    }
    /**
     * Gets the UrlGeneratorInterface subclass for Legacy Admin controllers.
     *
     * @param LegacyContext $legacyContext The legacy context needed by Legacy UrlGenerator
     *
     * @return UrlGeneratorInterface the UrlGenerator instance for Admin legacy controllers
     */
    public function forLegacy(\PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * Gets the UrlGeneratorInterface subclass for Symfony routes.
     *
     * @return UrlGeneratorInterface the UrlGenerator instance for Admin Symfony routes
     */
    public function forSymfony()
    {
    }
}
