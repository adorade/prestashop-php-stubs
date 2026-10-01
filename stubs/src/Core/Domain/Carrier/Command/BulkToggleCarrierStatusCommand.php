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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Carrier\Exception\CarrierConstraintException
     */
    public function __construct(array $carrierIds, bool $expectedStatus)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId[]
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
