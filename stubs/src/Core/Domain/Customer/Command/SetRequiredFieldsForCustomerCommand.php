<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Sets required fields for new customer when signing up in Front Office
 */
class SetRequiredFieldsForCustomerCommand
{
    /**
     * @param string[] $requiredFields
     */
    public function __construct(array $requiredFields)
    {
    }
    /**
     * @return string[]
     */
    public function getRequiredFields()
    {
    }
}
