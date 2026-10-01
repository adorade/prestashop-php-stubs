<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Catalog;

/**
 * Enumerates the Admin API endpoints an extra property definition can be associated with (the
 * URI templates targeted by ExtraPropertyDefinition::getAssociatedApis()), by reading the
 * OpenApi document API Platform generates: PrestaShopExtension::prepend() registers the core
 * AND active module resource paths in every kernel's api_platform mapping (that is how the
 * back office extracts the OAuth scopes), so the document already aggregates everything —
 * including the decorated additions (CQRSOpenApiFactory, ExtraPropertiesSchemaAdapter).
 *
 * Endpoints of installed-but-DISABLED modules are therefore not listed: their placements are
 * inert anyway and simply trigger the non-blocking "unknown endpoint" warning until the module
 * is enabled. A document that cannot be generated at all is logged and yields an empty catalog
 * — the pickers degrade to free text, never a broken page.
 *
 * KERNEL LIMITATION: API Platform only registers its OpenApi services (the factory injected
 * here) where enable_swagger is on — currently the admin kernel only. This service and its
 * consumers (AssociationExistenceChecker, ExtraPropertyDefinitionAdvancedType) are therefore
 * defined in app/config/admin/services.yml instead of the shared catalog.yml; using them in
 * another kernel requires enabling swagger there first, and will fail loudly until then.
 *
 * The scan is memoized per instance and cached cross-request in the
 * prestashop.extra_property.catalog.filesystem_cache pool — the endpoints are bound to the
 * deployed code and installed modules, whose management already clears the Symfony cache the
 * pool lives in, so no dedicated invalidation is needed. A generation failure is never cached.
 */
class ApiEndpointCatalog
{
    public function __construct(private readonly \ApiPlatform\OpenApi\Factory\OpenApiFactoryInterface $openApiFactory, private readonly \Psr\Log\LoggerInterface $logger, private readonly \Symfony\Contracts\Cache\CacheInterface $cache)
    {
    }
    /**
     * @return list<array{uriTemplate: string, methods: list<string>}> sorted by URI template
     */
    public function getAll(): array
    {
    }
    /**
     * The given path is normalized (single leading slash, no trailing slash) before comparison.
     */
    public function hasUriTemplate(string $path): bool
    {
    }
}
