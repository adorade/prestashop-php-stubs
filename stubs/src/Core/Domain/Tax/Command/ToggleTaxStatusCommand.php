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
     * @throws TaxException
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
     * @return TaxId
     */
    public function getTaxId()
    {
    }
}
