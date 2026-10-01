<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Unique state iso code validator constraint
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class UniqueStateIsoCode extends \Symfony\Component\Validator\Constraint
{
    /**
     * @var string
     */
    public $message = 'This ISO code already exists. You cannot create two states with the same ISO code within the same country.';
    /**
     * Exclude (or not) a specific State ID for the search of ISO Code
     *
     * @var int|null
     */
    public $excludeStateId = null;
    /**
     * The country to which the state is associated
     *
     * @var int
     */
    public $countryId;
    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
