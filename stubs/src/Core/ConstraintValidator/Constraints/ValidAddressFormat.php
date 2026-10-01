<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validates that a country address format string is parseable and references
 * only allowed object/field tokens, with all required fields present.
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class ValidAddressFormat extends \Symfony\Component\Validator\Constraint
{
    public string $message = 'Invalid address format: %errors%';
    public function validatedBy(): string
    {
    }
}
