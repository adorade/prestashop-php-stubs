<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Synchronizes the OpenAPI schema with the actual properties available in the resource.
 *
 * This adapter ensures that the OpenAPI documentation accurately reflects the actual
 * properties available in the resource classes. It performs the following operations:
 *
 * 1. **Removes obsolete properties**: Properties that are documented in the schema but
 *    no longer exist in the actual resource class are removed.
 *    Example: If 'ean13' was replaced by 'gtin' in the resource, 'ean13' is removed from the schema.
 *
 * 2. **Validates property mappings**: For CQRS operations, validates that API property names
 *    correctly map to command property names. For example if the CQRS command has a localizedNames
 *    property that was renamed via the mapping into names then the schema won't use localizedNames but names for the final
 *    schema output so that it matches the actual expected format.
 *
 * 3. **Preserves special properties**: Multi-parameter setter properties (e.g., setDate(year, month, day))
 *    are preserved even if they don't match a single property, as they're handled specially. So that multi-parameter adapter can use them.
 *
 * 4. **Synchronizes required fields**: The 'required' array is filtered to only include
 *    properties that actually exist in the resource/command class.
 *
 * This ensures that API consumers only see properties that can actually be used, preventing
 * confusion and errors when properties are renamed or removed during refactoring.
 */
class SchemaSynchronizer implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\PropertyInfo\PropertyInfoExtractorInterface $propertyInfoExtractor, protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory, protected readonly \PrestaShopBundle\ApiPlatform\DomainObjectDetector $domainObjectDetector)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    /**
     * Extracts all property names from a resource class.
     * Uses PropertyInfoExtractor first (preferred method), falls back to reflection if that fails.
     *
     * @return array<string> Array of property names (excluding JSON-LD context properties)
     */
    protected function getResourceProperties(string $resourceClass): array
    {
    }
    /**
     * Extracts property names from a class using PHP reflection as a fallback method.
     * This method identifies properties by:
     * 1. Public non-static properties
     * 2. Getter methods (getXxx, isXxx, hasXxx) with no parameters
     *
     * @return array<string> Array of property names found via reflection
     */
    protected function getPropertiesUsingReflection(string $resourceClass): array
    {
    }
    /**
     * Finds all public methods that accept multiple required parameters.
     * These are typically multi-parameter setters like setDate(year, month, day) or setAddress(street, city, zip).
     * These methods cannot be validated against a single property, so they need special handling.
     *
     * The method name is converted to a property name by:
     * - Removing 'set' prefix: setDate() -> 'date'
     * - Removing 'with' prefix: withDate() -> 'date'
     * - Using full method name if no prefix matches
     *
     * @return array<string, \ReflectionMethod> Associative array mapping property names to their ReflectionMethod objects
     */
    protected function findMethodsWithMultipleArguments(\ReflectionClass $reflectionClass): array
    {
    }
}
