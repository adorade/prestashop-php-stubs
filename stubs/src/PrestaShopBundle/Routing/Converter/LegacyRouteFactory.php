<?php

namespace PrestaShopBundle\Routing\Converter;

class LegacyRouteFactory
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker)
    {
    }
    public function buildFromCollection(\Symfony\Component\Routing\RouteCollection $routeCollection): array
    {
    }
}
