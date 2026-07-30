<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Bulk toggles carrier status
 */
class BulkToggleCarrierStatusCommand
{
    /**
     * @param int[] $carrierIds
     * @param bool $expectedStatus
     *
     * @throws CarrierConstraintException
     */
    public function __construct(array $carrierIds, bool $expectedStatus)
    {
    }
    /**
     * @return CarrierId[]
     */
    public function getCarrierIds(): array
    {
    }
    /**
     * @return bool
     */
    public function getExpectedStatus(): bool
    {
    }
}
