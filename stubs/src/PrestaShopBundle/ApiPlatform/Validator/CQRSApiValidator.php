<?php

namespace PrestaShopBundle\ApiPlatform\Validator;

/**
 * Because the core CQRS commands have no constraints defined in their classes, we need to define them on the associated API
 * Resource class, but since the resource carries the constraints the resource needs to be the one validated, so this service
 * is used right before the CQRS object denormalization to validate the input.
 */
class CQRSApiValidator
{
    public function __construct(protected readonly \Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface $validatorMetadataFactory, protected readonly \ApiPlatform\Validator\ValidatorInterface $validator)
    {
    }
    public function hasConstraints(string $resourceClass): bool
    {
    }
    public function validate(mixed $apiResource, \ApiPlatform\Metadata\Operation $operation): void
    {
    }
}
