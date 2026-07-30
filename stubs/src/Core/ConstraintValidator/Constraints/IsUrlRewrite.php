<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * Class IsUrlRewrite is responsible of validating url rewrites according to several patterns
 * which differ when ascending urls are enabled or not.
 *
 * @Annotation
 */
class IsUrlRewrite extends \Symfony\Component\Validator\Constraint
{
    public $message = '%s is invalid.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
