<?php

namespace PrestaShopBundle\ApiPlatform\Serializer;

/**
 * This extractor is used most for CQRS commands setters on DecimalNumber properties, they
 * usually expect a string value as input and transform them into DecimalNumber. By default,
 * only string values should be accepted but a float input is also a correct type so we allow
 * these two native types (string and float) thanks to this extractor.
 */
class DecimalNumberTypeExtractor implements \Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface
{
    public function __construct(protected \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory)
    {
    }
    public function getTypes(string $class, string $property, array $context = []): ?array
    {
    }
}
