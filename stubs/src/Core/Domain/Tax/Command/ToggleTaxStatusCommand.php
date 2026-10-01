<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Command;

/**
 * Toggles tax status
 */
class ToggleTaxStatusCommand
{
    /**
     * @param int $taxId
     * @param bool $expectedStatus
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Tax\Exception\TaxException
     */
    public function __construct($taxId, $expectedStatus)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId
     */
    public function getTaxId()
    {
    }
}
