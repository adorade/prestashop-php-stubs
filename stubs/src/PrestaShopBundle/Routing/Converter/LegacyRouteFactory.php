<?php

namespace PrestaShopBundle\Routing\Converter;

class LegacyRouteFactory
{
    public function __construct(\PrestaShopBundle\Entity\Repository\FeatureFlagRepository $featureFlagRepository)
    {
    }
    public function buildFromCollection(\Symfony\Component\Routing\RouteCollection $routeCollection): array
    {
    }
}
