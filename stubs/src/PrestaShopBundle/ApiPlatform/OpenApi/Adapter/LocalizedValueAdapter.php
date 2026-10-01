<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Adapts localized values in OpenAPI schema.
 * Localized values are arrays indexed by locales (or objects with properties matching the locale in JSON),
 * this adapter adapts the expected format along with an example to indicate the user that the key to use is the locale.
 */
class LocalizedValueAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
}
