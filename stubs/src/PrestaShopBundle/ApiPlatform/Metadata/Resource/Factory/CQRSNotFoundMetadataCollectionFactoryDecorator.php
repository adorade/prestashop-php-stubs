<?php

namespace PrestaShopBundle\ApiPlatform\Metadata\Resource\Factory;

/**
 * This factory decorates the ApiPlatform default resource factory. It looks into each operation and checks
 * if the extra property contains some CQRS commands and/or queries. If they are not found the operation/endpoint
 * is removed.
 *
 * The purpose for this clean is that we can have a single ps_apiresources module that contains definitions for
 * endpoints based on 9.1 commands for example, the endpoints would not work on 9.0 so they are filtered out.
 *
 * Scope extraction is also impacted by this filtering, meaning if a scope is only associated to invalid operations
 * it won't be available in both prod mode and debug mode, unless you enable the related feature flag.
 */
class CQRSNotFoundMetadataCollectionFactoryDecorator implements \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface
{
    use \PrestaShopBundle\ApiPlatform\ExperimentalEndpointsCheckerTrait;
    public function __construct(private readonly \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $decorated, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker, private readonly \Psr\Container\ContainerInterface $container)
    {
    }
    public function create(string $resourceClass): \ApiPlatform\Metadata\Resource\ResourceMetadataCollection
    {
    }
}
