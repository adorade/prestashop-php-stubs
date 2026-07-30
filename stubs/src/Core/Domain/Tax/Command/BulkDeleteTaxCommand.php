<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Command;

/**
 * Deletes taxes on bulk action
 */
class BulkDeleteTaxCommand
{
    /**
     * @param array<int> $taxIds
     *
     * @throws TaxException
     */
    public function __construct(array $taxIds)
    {
    }
    /**
     * @return array<TaxId>
     */
    public function getTaxIds()
    {
    }
}
