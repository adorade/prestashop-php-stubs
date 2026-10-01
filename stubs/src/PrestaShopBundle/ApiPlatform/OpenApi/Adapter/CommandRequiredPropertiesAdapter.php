<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Documents which properties of a write operation are required.
 *
 * The payload is denormalized into the CQRS command, so a constructor parameter without default value must be present
 * in the request: when it is missing the serializer cannot build the command at all and the request fails. Those
 * parameters are therefore listed as required in the schema, using their API name when the mapping renames them.
 *
 * Two kinds of parameters are excluded since the API fills them itself rather than reading them from the payload:
 * the ones mapped from the request context ([_context] paths, like the shop constraint) and the ones provided as URI
 * variables (like the identifier of the updated resource).
 */
class CommandRequiredPropertiesAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    /**
     * A parameter with a default value can be omitted from the payload, and so can a variadic one.
     */
    protected function isRequired(\ReflectionParameter $parameter): bool
    {
    }
    /**
     * Reads the CQRSCommandMapping to know the API name of each command parameter, and which ones the API fills from
     * the request context.
     *
     * @return array{array<string, string>, array<string, true>}
     */
    protected function getMappedParameters(\ApiPlatform\Metadata\Operation $operation): array
    {
    }
}
