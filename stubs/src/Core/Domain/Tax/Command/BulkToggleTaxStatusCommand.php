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
     * @throws TaxException
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
     * @return TaxId[]
     */
    public function getTaxIds()
    {
    }
}
