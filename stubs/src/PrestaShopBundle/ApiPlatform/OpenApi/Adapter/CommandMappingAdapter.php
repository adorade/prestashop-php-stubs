<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Applies command mapping to OpenAPI schema.
 * Updates the schema property names based on the mapping specified, if for example the CQRS commands has a localizedNames
 * property that was renamed via the mapping into names then the schema won't use localizedNames but names for the final
 * schema output so that it matches the actual expected format.
 */
class CommandMappingAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
}
