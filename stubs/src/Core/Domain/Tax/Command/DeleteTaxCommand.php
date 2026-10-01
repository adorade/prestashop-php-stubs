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
     * @return \PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId
     */
    public function getTaxId()
    {
    }
}
