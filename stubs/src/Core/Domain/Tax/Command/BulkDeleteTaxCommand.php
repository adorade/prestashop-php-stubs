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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Tax\Exception\TaxException
     */
    public function __construct(array $taxIds)
    {
    }
    /**
     * @return array<\PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId>
     */
    public function getTaxIds()
    {
    }
}
