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
     * @throws CarrierConstraintException
     */
    public function __construct(array $carrierIds)
    {
    }
    /**
     * @return CarrierId[]
     */
    public function getCarrierIds(): array
    {
    }
}
