<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Unique state iso code validator constraint
 */
class UniqueStateIsoCode extends \Symfony\Component\Validator\Constraint
{
    /**
     * @var string
     */
    public $message = 'This ISO code already exists. You cannot create two states with the same ISO code.';
    /**
     * Exclude (or not) a specific State ID for the search of ISO Code
     *
     * @var int|null
     */
    public $excludeStateId = null;
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
