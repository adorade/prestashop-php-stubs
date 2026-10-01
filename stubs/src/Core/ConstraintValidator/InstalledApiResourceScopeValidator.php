<?php

namespace PrestaShop\PrestaShop\Core\ConstraintValidator;

class InstalledApiResourceScopeValidator extends \Symfony\Component\Validator\ConstraintValidator
{
    public function __construct(private readonly \PrestaShopBundle\ApiPlatform\Scopes\ApiResourceScopesExtractorInterface $apiResourceScopesExtractor)
    {
    }
    /**
     * @param string[] $value
     * @param \Symfony\Component\Validator\Constraint $constraint
     */
    public function validate($value, \Symfony\Component\Validator\Constraint $constraint)
    {
    }
}
