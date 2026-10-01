<?php

namespace PrestaShopBundle\ApiPlatform\Metadata\Property\Factory;

/**
 * This service is used so that the parameters of the CQRS command constructor are used in priority over
 * their class fields. This is mostly because CQRS commands often change their initial scalar inputs into
 * ValueObjects:
 *   ex: input is inr $productId turned into a protected ProductId $productId;
 *
 * In the JSON schema we don't want to document the ValueObject but the actual input used to create the command
 * that should be used in the JSON body content.
 *
 * To do so we integrate this service in the decoration chain used by SchemaPropertyMetadataFactory, so we can replace
 * the types of property fields with their associated constructor types when present.
 */
class CQRSConstructorPropertyMetadataFactory implements \ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface
{
    /**
     * Define the priority so this decorator is the last one in the chain right before SchemaPropertyMetadataFactory,
     * this is the last opportunity to change the extracted types before the JSON schema is generated based on those types.
     */
    public const DECORATION_PRIORITY = 11;
    public function __construct(protected readonly \ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface $decorated, protected readonly \Symfony\Component\PropertyInfo\PropertyTypeExtractorInterface $constructorExtractor, protected readonly array $commandsAndQueries)
    {
    }
    public function create(string $resourceClass, string $property, array $options = []): \ApiPlatform\Metadata\ApiProperty
    {
    }
    /**
     * This method code is mostly copied from the PropertyInfoPropertyMetadataFactory except it extracts the type from the constructor
     */
    protected function overrideConstructorTypes(\ApiPlatform\Metadata\ApiProperty $propertyMetadata, string $resourceClass, string $property, array $options = []): \ApiPlatform\Metadata\ApiProperty
    {
    }
}
