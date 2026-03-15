<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Sets required fields for new address when adding
 */
class SetRequiredFieldsForAddressCommand
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
