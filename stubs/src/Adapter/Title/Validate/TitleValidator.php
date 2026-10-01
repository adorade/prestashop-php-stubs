<?php

namespace PrestaShop\PrestaShop\Adapter\Title\Validate;

/**
 * Validates TaxRulesGroup properties using legacy object model validation
 */
class TitleValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param \Gender $title
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function validate(\Gender $title): void
    {
    }
}
