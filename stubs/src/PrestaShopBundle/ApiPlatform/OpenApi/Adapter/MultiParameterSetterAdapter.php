<?php

namespace PrestaShopBundle\ApiPlatform\OpenApi\Adapter;

/**
 * Adapts multi-parameter setters in OpenAPI schema.
 * Some CQRS commands rely on multi-parameters setters, this is usually done to force specifying related parameters
 * all together because only one is not enough. For such setters we expect the method parameters to be provided in
 * a sub object, so this adapter transforms the schema to match this expected sub object.
 *
 * Example:
 *   UpdateProductCommand::setRedirectOption(string $redirectType, int $redirectTarget)
 *      => expected input ['redirectOption' => ['redirectType' => '301-category', 'redirectTarget' => 42]]
 */
class MultiParameterSetterAdapter implements \PrestaShopBundle\ApiPlatform\OpenApi\Adapter\OpenApiSchemaAdapterInterface
{
    public function __construct(protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory, protected readonly \PrestaShopBundle\ApiPlatform\DomainObjectDetector $domainObjectDetector)
    {
    }
    public function adapt(string $class, \ArrayObject $definition, ?\ApiPlatform\Metadata\Operation $operation = null): void
    {
    }
    protected function getSchemaType(string $builtInType): string
    {
    }
    protected function isDateTime(\ReflectionNamedType $methodParameter): bool
    {
    }
    /**
     * @return array<string, \ReflectionMethod>
     */
    protected function findMethodsWithMultipleArguments(\ReflectionClass $reflectionClass): array
    {
    }
}
