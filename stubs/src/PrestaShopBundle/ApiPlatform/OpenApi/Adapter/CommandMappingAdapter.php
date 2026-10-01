<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Applies command mapping to OpenAPI schema.
 * Updates the schema property names based on the mapping specified, if for example the CQRS commands has a localizedNames
 * property that was renamed via the mapping into names then the schema won't use localizedNames but names for the final
 * schema output so that it matches the actual expected format.
 *
 * ApiPlatform builds the input schema from the CQRS command, where it detects the properties from the accessors and
 * their writability from the constructor parameters. So three cases must be handled:
 *
 *   - the property was detected under its CQRS name, it is renamed into the API name (localizedDelay becomes delays)
 *   - the property was detected under the API name, but as read only because the matching constructor parameter has a
 *     different name (getMaxWidth against $max_width, isFree against $isFree, hasAdditionalHandlingFee against
 *     $hasAdditionalHandlingFee). The mapping proves it is part of the API input, so the flag is removed.
 *   - the property was detected under neither name, which means the mapping targets nothing on the command: it is
 *     left undocumented rather than documented as an untyped field the command would ignore anyway
 *
 * The context parameters ([_context] paths) are removed from the documented payload since the API injects them from
 * the request context.
 */
class CommandMappingAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    /**
     * Both paths must target a single property for the rename to be unambiguous, a mapping between sub properties
     * (like [ranges][@index][zoneId] to [ranges][@index][id_zone]) applies inside the schema of a property, not to
     * the property itself.
     */
    protected function isRenaming(string $apiPath, string $cqrsPath): bool
    {
    }
    /**
     * Returns the name of the documented property targeted by a mapping path, so the first level of it since the
     * deeper levels are part of the property own schema.
     */
    protected function getRootPropertyName(string $path): ?string
    {
    }
    /**
     * A mapped property is part of the API input by definition, so any readOnly flag inferred from the CQRS class
     * must be removed, else the property is absent from the request body example although the API expects it in the
     * payload (and its absence even breaks the request when the constructor parameter has no default value).
     */
    protected function makeApiPropertyWritable(\ArrayObject $definition, string $propertyName): void
    {
    }
}
