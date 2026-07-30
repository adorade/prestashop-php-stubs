<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

/**
 * Validates specific regex pattern for provided type
 */
class TypedRegexValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public const CATALOG_CHARS = '<>;=#{}';
    public const GENERIC_NAME_CHARS = '<>={}';
    public const MESSAGE_CHARS = '<>{}';
    public const NAME_CHARS = '0-9!<>,;?=+()@#"�{}_$%:';
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
