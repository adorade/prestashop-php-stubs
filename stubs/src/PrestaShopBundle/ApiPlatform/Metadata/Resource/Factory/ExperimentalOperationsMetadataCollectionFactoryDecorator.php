<?php

namespace PrestaShopBundle\ApiPlatform\Metadata\Resource\Factory;

/**
 * This factory decorates the ApiPlatform default resource factory. It looks into each operation and checks
 * if the extra property experimentalOperation is set to true, if its is then the operation should be filtered out
 * in production environment. This means the operation is not visible in Swagger, and it's not used to generate the
 * api routing, so it's not usable at all.
 *
 * Scope extraction is also impacted by this filtering, meaning if a scope is only associated to experimental operations
 * it won't be available in prod mode at all, unless you enable the related feature flag.
 *
 * In dev mode all operations are kept though.
 */
class ExperimentalOperationsMetadataCollectionFactoryDecorator implements \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface
{
    public function __construct(private readonly \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $decorated, private readonly bool $isDebug, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker)
    {
    }
    public function create(string $resourceClass): \ApiPlatform\Metadata\Resource\ResourceMetadataCollection
    {
    }
}
