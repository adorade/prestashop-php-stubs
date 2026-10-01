<?php

namespace PrestaShopBundle\ApiPlatform\Validator;

/**
 * Contract for the CQRS API validator: it tells whether a resource needs validation (hasConstraints) and validates
 * a denormalized API resource against the operation's constraints (validate).
 *
 * Implemented by CQRSApiValidator and decorated, in the Admin API kernel only, by ExtraPropertyCQRSApiValidator
 * (which merges extra-property violations with the resource constraint violations).
 */
interface CQRSApiValidatorInterface
{
    public function hasConstraints(string $resourceClass): bool;
    public function validate(mixed $apiResource, \ApiPlatform\Metadata\Operation $operation): void;
}
