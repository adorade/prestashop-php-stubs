<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject;

class NoSupplierId implements \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierIdInterface
{
    public const NO_SUPPLIER_ID = 0;
    public function getValue(): int
    {
    }
}
