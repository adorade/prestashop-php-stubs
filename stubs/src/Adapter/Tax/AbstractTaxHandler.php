<?php

namespace PrestaShop\PrestaShop\Adapter\Tax;

/**
 * Provides reusable methods for tax command/query handlers.
 */
abstract class AbstractTaxHandler
{
    /**
     * Gets legacy Tax
     *
     * @param TaxId $taxId
     *
     * @return Tax
     */
    protected function getTax(\PrestaShop\PrestaShop\Core\Domain\Tax\ValueObject\TaxId $taxId)
    {
    }
}
