<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject;

/**
 * Defines contract for supplier identity value
 */
interface SupplierIdInterface
{
    /**
     * @return int
     */
    public function getValue(): int;
}
