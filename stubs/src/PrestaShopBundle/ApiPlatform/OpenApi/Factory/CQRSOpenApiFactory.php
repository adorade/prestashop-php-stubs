<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Factory;

/**
 * This service decorates the main service that builds the Open API schema. It waits for the whole generation
 * to be done so that all types, schemas and example are correctly extracted and then:
 *
 *   - it applies the custom mapping, when defined, so that the schema reflects the expected format for the API,
 *     not the one in the domain logic from CQRS commands
 * . - it groups endpoints by domain and
 *   - it adapts some custom types like DecimalNumber and document them as numbers
 *   - it handles multi parameters setters and split the parameters into a sub object like the Admin API expects
 *   - it detects LocalizedValue fields and adapt their format and example
 *   - it synchronizes the documentation with actual resource properties (removes undocumented fields)
 */
class CQRSOpenApiFactory implements \ApiPlatform\OpenApi\Factory\OpenApiFactoryInterface
{
    use \ApiPlatform\JsonSchema\ResourceMetadataTrait;
    protected \Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor;
    public function __construct(
        protected readonly \ApiPlatform\OpenApi\Factory\OpenApiFactoryInterface $decorated,
        protected readonly \ApiPlatform\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface $resourceNameCollectionFactory,
        protected readonly \ApiPlatform\JsonSchema\DefinitionNameFactoryInterface $definitionNameFactory,
        protected readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multistoreFeature,
        protected readonly \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\SchemaAdapterChain $resourceSchemaAdapterChain,
        protected readonly \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\SchemaAdapterChain $operationSchemaAdapterChain,
        // No property promotion for this one since it's already defined in the ResourceMetadataTrait
        \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $resourceMetadataFactory
    )
    {
    }
    public function __invoke(array $context = []): \ApiPlatform\OpenApi\OpenApi
    {
    }
    /**
     * Returns the list of multishop context parameters added to each operation.
     *
     * @return \ApiPlatform\OpenApi\Model\Parameter[]
     */
    protected function getMultiShopParameters(): array
    {
    }
    protected function getSchemaDefinition(\ApiPlatform\OpenApi\OpenApi $openApi, \ApiPlatform\Metadata\Operation $operation): ?\ArrayObject
    {
    }
    /**
     * Deduce the domain from the FQCN, for classes that are at the root of ApiPlatform\Resources the class name is used,
     * but if the domain was placed in a subspace with multiple classes in it we use the last sub namespace.
     *
     * ex:
     *      PrestaShopBundle\ApiPlatform\Resources\ApiClient => ApiClient
     *      PrestaShop\Module\APIResources\ApiPlatform\Resources\ApiClient\ApiClient => ApiClient
     *      PrestaShop\Module\APIResources\ApiPlatform\Resources\ApiClient\ApiClientList => ApiClient
     *      PrestaShop\Module\APIResources\ApiPlatform\Resources\Product\Product => Product
     *      PrestaShop\Module\APIResources\ApiPlatform\Resources\Product\ProductList => Product
     */
    protected function getOperationDomain(\ApiPlatform\Metadata\HttpOperation $operation): ?string
    {
    }
}
