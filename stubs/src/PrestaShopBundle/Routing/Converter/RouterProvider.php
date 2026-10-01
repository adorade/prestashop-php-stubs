<?php

namespace PrestaShopBundle\Routing\Converter;

/**
 * Class RouterProvider.
 */
class RouterProvider extends \PrestaShopBundle\Routing\Converter\AbstractLegacyRouteProvider
{
    public const LEGACY_LINK_ROUTE_ATTRIBUTE = '_legacy_link';
    public const FEATURE_FLAG_NAME = '_legacy_feature_flag';
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \PrestaShopBundle\Routing\Converter\LegacyRouteFactory $factory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLegacyRoutes()
    {
    }
}
