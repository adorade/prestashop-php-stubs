<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * This normalizer is based on the Symfony ObjectNormalizer, but it handles some specific normalization for
 * our CQRS <-> ApiPlatform conversion:
 *  - detects if a type is a domain class (either because it is detected as a CQRS command or query) or if it is part of the
 *    PrestaShop\PrestaShop\Core\Domain namespace
 *  - handle CQRS constructor proper types because the constructor types sometimes don't match their properties, since they are
 *    transformed into Value Objects, so the regular ObjectNormalizer triggers a type exception
 *  - handle getters that match the property without starting by get, has, is
 *  - set appropriate context for the ValueObjectNormalizer for when we don't want a ValueObject but the scalar value to be used
 *  - if an API resource is denormalized but has an input class from the domain this serializer detects it and automatically deserialize
 *    the data into the CQRS object, this saves one deserialization process as the command can be passed to the processor directly
 *  - when CQRS input class switching is detected the normalizer performs a validation of the input,then it build a new context for
 *    the next serialization so that mapping and localized values are correctly handled
 *  - handle setter methods that use multiple parameters
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.api.normalizers')]
class CQRSApiNormalizer extends \Symfony\Component\Serializer\Normalizer\ObjectNormalizer
{
    public function __construct(protected readonly \PrestaShopBundle\ApiPlatform\DomainObjectDetector $domainObjectDetector, protected readonly \PrestaShopBundle\ApiPlatform\LocalizedValueUpdater $localizedValueUpdater, protected readonly \PrestaShopBundle\ApiPlatform\Validator\CQRSApiValidatorInterface $CQRSApiValidator, ?\Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory = null, ?\Symfony\Component\Serializer\NameConverter\NameConverterInterface $nameConverter = null, ?\Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor = null, ?\Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface $propertyTypeExtractor = null, ?\Symfony\Component\Serializer\Mapping\ClassDiscriminatorResolverInterface $classDiscriminatorResolver = null, ?callable $objectClassResolver = null, array $defaultContext = [])
    {
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = [])
    {
    }
    public function getSupportedTypes(?string $format): array
    {
    }
    protected function isDomainObject(mixed $objectOrType, array $context): bool
    {
    }
    /**
     * This method is overridden because our CQRS objects sometimes have setters with multiple arguments, these are usually used to force specifying arguments that must
     * be defined all together, so they can be validated as a whole. The ObjectNormalizer only deserialize object properties one at a time, so we have to handle this special
     * use case and the best moment to do so is right after the object is instantiated and right before the properties are deserialized.
     */
    protected function instantiateObject(array &$data, string $class, array &$context, \ReflectionClass $reflectionClass, bool|array $allowedAttributes, ?string $format = null)
    {
    }
    /**
     * This method is only used to denormalize the constructor parameters, the CQRS classes usually expect scalar input values that
     * are converted into ValueObject in the constructor, so only in this phase of the denormalization we disable the ValueObjectNormalizer
     * by specifying the context option ValueObjectNormalizer::VALUE_OBJECT_RETURNED_AS_SCALAR.
     *
     * This is also the right moment to update localized values before they are passed in the constructor.
     */
    protected function denormalizeParameter(\ReflectionClass $class, \ReflectionParameter $parameter, string $parameterName, mixed $parameterData, array $context, ?string $format = null): mixed
    {
    }
    /**
     * This method is used when normalizing nested children, in nested value we don't want the ValueObject to be returned as arrays but as simple
     * values, so we force the ValueObjectNormalizer::VALUE_OBJECT_RETURNED_AS_SCALAR option. So ValueObject are only normalized as array when they
     * are the root object.
     */
    protected function createChildContext(array $parentContext, string $attribute, ?string $format): array
    {
    }
    /**
     * This method is overridden in order to increase the getters used to fetch attributes, by default the ObjectNormalizer
     * searches for getters start with get/is/has/can, but it ignores getters that matches the properties exactly.
     */
    protected function extractAttributes(object $object, ?string $format = null, array $context = []): array
    {
    }
    /**
     * This method is overridden in order to dynamically change the localized properties identified by a context or the LocalizedValue
     * helper attribute. The used key that are based on Language's locale are automatically converted to rely on Language's database ID.
     */
    protected function getAttributeValue(object $object, string $attribute, ?string $format = null, array $context = []): mixed
    {
    }
    /**
     * This method is overridden in order to dynamically change the localized properties identified by a context or the LocalizedValue
     *  helper attribute. he used key that are based on Language's database ID are automatically converted to rely on Language's locale.
     */
    protected function setAttributeValue(object $object, string $attribute, mixed $value, ?string $format = null, array $context = [])
    {
    }
    /**
     * Call all the method with multiple arguments and remove the data from the normalized data since it has already been denormalized into
     * the object.
     *
     * @param array $data
     * @param object $object
     * @param array<string, \ReflectionMethod> $methodsWithMultipleArguments
     *
     * @return void
     */
    protected function executeMethodsWithMultipleArguments(array &$data, object $object, array $methodsWithMultipleArguments, array $context, ?string $format = null): void
    {
    }
    /**
     * @param \ReflectionClass $reflectionClass
     * @param array $normalizedData
     *
     * @return array<string, \ReflectionMethod>
     */
    protected function findMethodsWithMultipleArguments(\ReflectionClass $reflectionClass, array $normalizedData): array
    {
    }
}
