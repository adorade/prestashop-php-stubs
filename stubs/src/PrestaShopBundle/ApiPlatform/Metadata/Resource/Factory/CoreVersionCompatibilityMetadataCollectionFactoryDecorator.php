<?php

namespace PrestaShopBundle\ApiPlatform\Metadata\Resource\Factory;

/**
 * This factory decorates the ApiPlatform default resource factory. It looks into each operation and checks
 * if the extra properties minVersion and/or maxVersion are defined, if the running core version is out of the
 * declared bounds the operation is removed. This means the operation is not visible in Swagger, and it's not
 * used to generate the api routing, so it's not usable at all and returns a 404.
 *
 * The purpose is that the ps_apiresources module can contain endpoint definitions that rely on core fixes only
 * available since a specific version (e.g. minVersion 9.2.1), the endpoints are then automatically filtered out
 * on older core versions while the rest of the module's endpoints remain usable.
 *
 * Both bounds are inclusive and compared with version_compare, so its semantics apply as-is (note for example
 * that 9.2.0-beta.1 < 9.2.0). No validation is performed on the version strings.
 *
 * Scope extraction is also impacted by this filtering, meaning if a scope is only associated to operations
 * that are incompatible with the core version it won't be available in both prod mode and debug mode, unless
 * you enable the related feature flag.
 *
 * Note that the core version constant lags behind the actual content of the development branches
 * (Version::VERSION is only bumped at release time), so on a development branch an endpoint gated on the
 * next patch version is filtered even though the branch may already contain its required fix: enable the
 * experimental endpoints feature flag to work with it.
 */
class CoreVersionCompatibilityMetadataCollectionFactoryDecorator implements \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface
{
    use \PrestaShopBundle\ApiPlatform\ExperimentalEndpointsCheckerTrait;
    public function __construct(private readonly \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $decorated, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker, private readonly string $coreVersion = \PrestaShop\PrestaShop\Core\Version::VERSION)
    {
    }
    public function create(string $resourceClass): \ApiPlatform\Metadata\Resource\ResourceMetadataCollection
    {
    }
}
