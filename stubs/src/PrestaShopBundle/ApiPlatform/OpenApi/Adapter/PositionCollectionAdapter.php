<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Adapts position collection properties in OpenAPI schema.
 * PositionCollection are arrays that contain position updates formatted like, the field of the array
 * can be modified via the attribute configuration. See PositionCollection for more details.
 */
class PositionCollectionAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
}
