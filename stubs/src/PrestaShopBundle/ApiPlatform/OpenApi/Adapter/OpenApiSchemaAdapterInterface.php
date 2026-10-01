<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Interface for OpenAPI schema adapters that transform schema definitions.
 */
interface OpenApiSchemaAdapterInterface
{
    /**
     * Adapts the OpenAPI schema definition for a given class.
     *
     * @param string $class The class name to adapt the schema for
     * @param \ArrayObject $definition The schema definition to adapt (modified in place)
     * @param \ApiPlatform\Metadata\Operation|null $operation Optional operation context for the adaptation
     */
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void;
}
