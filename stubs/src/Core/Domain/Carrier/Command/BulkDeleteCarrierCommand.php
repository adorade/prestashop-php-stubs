<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Bulk deletes carriers
 */
class BulkDeleteCarrierCommand
{
    /**
     * @param int[] $carrierIds
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
    public function __construct(array $carrierIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId[]
     */
    public function getCarrierIds(): array
    {
    }
}
