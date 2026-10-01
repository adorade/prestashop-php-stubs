<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Documents the `extraProperties` sub-object in the generated OpenAPI schema.
 *
 * It mirrors the runtime behaviour of the extra property API bridge: a definition is documented on an endpoint
 * only when its associatedApis matches that endpoint's URI template. The sub-object is grouped by module
 * technical name, then by (snake_case) property name; LANG-scope fields are documented as locale-indexed objects.
 *
 * Two phases (see CQRSOpenApiFactory):
 *   - resource phase ($operation === null): the read/output schema — documents the union of definitions matching
 *     any of the resource's operations.
 *   - operation phase ($operation !== null): the input schema — documents definitions matching that write operation.
 *
 * Registered with a very low priority so it runs AFTER SchemaSynchronizer (which strips properties that are not
 * declared on the resource class) — otherwise the synthetic `extraProperties` property would be removed again.
 *
 * Deliberately NOT filtered by shop association: the OpenAPI document describes the API's full
 * capability, not one shop context — a definition restricted to some shops is still documented;
 * at runtime the subscriber/validator simply ignore it outside its shops.
 */
class ExtraPropertiesSchemaAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $resourceMetadataFactory)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    protected function definitionsForOperation(\ApiPlatform\Metadata\HttpOperation $operation): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    /**
     * Returns the union of definitions matching any operation of the given resource (deduplicated).
     */
    protected function definitionsForResource(string $resourceClass): ?\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection
    {
    }
    protected function buildExtraPropertiesSchema(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionCollection $definitions): \ArrayObject
    {
    }
    /**
     * @return array<string, mixed>
     */
    protected function buildFieldSchema(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): array
    {
    }
    /**
     * @return array<string, mixed>
     */
    protected function buildChoiceSchema(\PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinition $definition): array
    {
    }
}
