<?php

namespace PrestaShopBundle\ApiPlatform\Scopes;

/**
 * This service manually extracts data from the ApiResource classes to get the scopes associated
 * to them, following our internal convention to set the scopes via extra parameters.
 *
 * We cannot use the ApiPlatform metadata collection because it only contains resources for enabled modules,
 * as it should, that were set in our PrestaShopExtension. Since in forms we need all the installed scopes,
 * not just the enabled ones, we need this service to extract them.
 *
 * @internal
 */
class ApiResourceScopesExtractor implements \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface
{
    use \PrestaShopBundle\ApiPlatform\ExperimentalEndpointsCheckerTrait;
    public function __construct(private readonly \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $resourceMetadataCollectionFactory, private readonly \PrestaShop\PrestaShop\Core\EnvironmentInterface $environment, private readonly \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker, private readonly \Psr\Container\ContainerInterface $container, private readonly string $moduleDir, private readonly array $installedModules, private readonly array $enabledModules, private readonly string $projectDir)
    {
    }
    /**
     * Returns all installed resource scopes even the ones that are not enabled for now.
     *
     * @return ApiResourceScopes[]
     */
    public function getAllApiResourceScopes(): array
    {
    }
    /**
     * Returns resource scopes for core and ENABLED modules.
     *
     * @return ApiResourceScopes[]
     */
    public function getEnabledApiResourceScopes(): array
    {
    }
}
