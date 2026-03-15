<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tax\Command;

/**
 * Deletes tax
 */
class DeleteTaxCommand
{
    /**
     * @param int $taxId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Tax\Exception\TaxException
     */
    public function __construct($taxId)
    {
    }
    /**
     * @return TaxId
     */
    public function getTaxId()
    {
    }
}
