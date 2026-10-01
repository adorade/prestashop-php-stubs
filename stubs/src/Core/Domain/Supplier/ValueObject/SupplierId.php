<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject;

/**
 * Class SupplierId
 */
class SupplierId implements \PrestaShop\PrestaShop\Core\Domain\Supplier\ValueObject\SupplierIdInterface
{
    /**
     * @param int $supplierId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Supplier\Exception\SupplierException
     */
    public function __construct(int $supplierId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
