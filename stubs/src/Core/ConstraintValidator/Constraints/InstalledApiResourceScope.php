<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator\Constraints;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class InstalledApiResourceScope extends \Symfony\Component\Validator\Constraint
{
    public $message = 'The scopes %scope_names% are not associated to any installed API.';
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
    }
}
