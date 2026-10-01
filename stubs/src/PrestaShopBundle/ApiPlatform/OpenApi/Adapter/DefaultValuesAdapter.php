<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Documents the default values of a write operation: the value is exposed as the default of the property, and the
 * property is removed from the required ones since the API fills it when the payload omits it.
 *
 * It runs after the CommandRequiredPropertiesAdapter, which lists as required every constructor parameter of the
 * command that has no default value: a parameter defaulted by the operation is one of them, and the operation is the
 * one telling the truth about the API contract.
 */
class DefaultValuesAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    use \PrestaShopBundle\ApiPlatform\DefaultValuesTrait;
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    protected function documentDefaultValue(\ArrayObject $definition, string $propertyName, mixed $defaultValue): void
    {
    }
}
