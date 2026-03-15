<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Class IsUrlRewriteValidator is responsible of validating url rewrites according to several patterns
 * which differ when ascending urls are enabled or not.
 */
class IsUrlRewriteValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    /**
     * this constructor can accept boolean value of already predefined accented chars allowance configuration to not
     * introduce BC break. The recommended approach is to pass
     * PrestaShop\PrestaShop\Adapter\Configuration as a service instead to avoid keeping cached scalar value.
     *
     * @param ConfigurationInterface|bool $accentedCharsConfiguration
     */
    public function __construct($accentedCharsConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
