<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * This normalizer is used to serialize our ValueObject properties used in our CQRS commands and queries.
 * Since we don't have a class or a common interface it can detect if a class looks like a ValueObject based
 * on these criteria:
 *  - the object is a class that exists
 *  - the FQCN contains ValueObject, usually in its namespace not in the class name
 *  - the class implements a getValue method
 *  - the constructor has exactly one required parameter which type matches the normalized data type (no
 *    type is also accepted for old VOs that were not strict enough)
 *
 * Here is the normalized format of a ValueObject, the index is based on the class name:
 *
 *   new ProductId(42) => ['productId' => 42]
 *
 * The denormalization expects the key in the array to match either:
 *   - the constructor parameter name
 *   - the short class name in came case
 *   - the short class name in snake-case
 *   - `value`
 *
 * The default behaviour of this normalizer is to transform a scalar value into a VO or a VO into scalar value.
 * This behaviour can be changed if the ValueObjectNormalizer::VALUE_OBJECT_RETURNED_AS_SCALAR is set to true, in
 * which case:
 *   - denormalization will return the scalar value instead of the VO object
 *   - normalization will return the scalar value instead of an array containing the value
 *
 * This is useful:
 *   - to inject scalar values in the commands/queries constructor that expect scalar values that are then transformed into VOs
 *   - in normalized data when the VO is one of many properties to avoid an extra layer:
 *       ex: serialized product will not look like ['productId' => ['value' => 42], 'type' => standard]
 *           but instead ['productId' => 42, 'type' => standard]
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.api.normalizers')]
class ValueObjectNormalizer implements \Symfony\Component\Serializer\Normalizer\NormalizerInterface, \Symfony\Component\Serializer\Normalizer\DenormalizerInterface
{
    public const VALUE_OBJECT_RETURNED_AS_SCALAR = 'value_object_returned_as_scalar';
    protected \Doctrine\Inflector\Inflector $inflector;
    /**
     * @var array<string, string[]>
     */
    protected array $allowedNamesByType = [];
    /**
     * @var array<string, ?\ReflectionParameter>
     */
    protected array $constructorParameter = [];
    /**
     * The key is the initial class of the NoValueObject (example NoStateId)
     * The value is the deduced short name of the associated ValueObject with the No part removed (example StateId)
     * If the array doesn't contain the VO class it means it's not a NoValueObject
     *
     * @var array<string, string>
     */
    protected array $noValueClasses = [];
    public function __construct(protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null)
    {
    }
    public function normalize(mixed $object, ?string $format = null, array $context = [])
    {
    }
    public function supportsNormalization(mixed $data, ?string $format = null)
    {
    }
    public function getSupportedTypes(?string $format): array
    {
    }
    protected function isValueObject(mixed $data): bool
    {
    }
    protected function isValueObjectType(string $type): bool
    {
    }
    protected function matchesConstructorParameter(mixed $value, string $type): bool
    {
    }
    protected function getAllowedValueNames(string $type): array
    {
    }
    protected function getConstructorParameter(object|string $type): ?\ReflectionParameter
    {
    }
    /**
     * Is the class used for "no values" like NoStateId, NoCombination that always carry the
     * 0 value.
     */
    protected function isNoValueClass(object|string $type): bool
    {
    }
}
