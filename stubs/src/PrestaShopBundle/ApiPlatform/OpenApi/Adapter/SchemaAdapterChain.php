<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Chain of schema adapters that applies all adaptations in the correct order.
 */
class SchemaAdapterChain implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    /**
     * @param iterable<OpenApiSchemaAdapterInterface> $adapters
     */
    public function __construct(iterable $adapters)
    {
    }
    /**
     * @var OpenApiSchemaAdapterInterface[]
     */
    protected readonly array $adapters;
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
}
