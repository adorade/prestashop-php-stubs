<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Command;

/**
 * Toggles taxes status on bulk action
 */
class BulkToggleTaxStatusCommand
{
    /**
     * @param int[] $taxIds
     * @param bool $expectedStatus
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Tax\Exception\TaxException
     */
    public function __construct(array $taxIds, $expectedStatus)
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId[]
     */
    public function getTaxIds()
    {
    }
}
