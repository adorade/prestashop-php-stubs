<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Adapts DecimalNumber properties in OpenAPI schema.
 * Internally we rely on DecimalNumber for float values because they are more accurate,
 * but in the JSON format they should be considered as float, so we update the schema for these types.
 */
class DecimalNumberAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
}
