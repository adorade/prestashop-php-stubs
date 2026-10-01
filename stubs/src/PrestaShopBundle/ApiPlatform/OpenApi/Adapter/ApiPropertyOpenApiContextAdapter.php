<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Applies the openapiContext declared on the ApiProperty attributes of the API resource, it always wins over the
 * schema detected automatically.
 *
 * ApiPlatform natively applies that context on the resource schema, the one used by the read operations, but not on
 * the schemas of the write operations: those are built from the CQRS command, whose properties carry no ApiProperty
 * attribute, so the format detected from the command was used even when the resource documented an explicit one. A
 * collection of objects declared via openapiContext, for example, ended up documented as a collection of strings in
 * the request body although the response documented it correctly.
 *
 * This adapter runs after the ones detecting formats automatically (localized values, decimal numbers, dates, ...) so
 * that an explicit context is never overridden by a guessed format.
 */
class ApiPropertyOpenApiContextAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \ApiPlatform\Metadata\Property\Factory\PropertyNameCollectionFactoryInterface $propertyNameCollectionFactory, protected readonly \ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface $propertyMetadataFactory)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    /**
     * @return array<string, array<string, mixed>> the non empty openapiContext of each property of the resource
     */
    protected function getOpenApiContexts(string $resourceClass): array
    {
    }
}
