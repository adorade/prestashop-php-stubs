<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Validation constraint for making sure there are no HTML or PHP tags to be removed by strip_tags
 */
class NoTags extends \Symfony\Component\Validator\Constraint
{
    public $message = 'Field must not contain HTML or PHP tags';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
