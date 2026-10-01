<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Adapts DateImmutable properties to use 'date' format instead of 'date-time' in OpenAPI schema.
 * Checks both property types and getter/setter method signatures to detect DateImmutable usage.
 * Only adapts API resource classes, not command classes.
 */
class DatePropertyAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
}
