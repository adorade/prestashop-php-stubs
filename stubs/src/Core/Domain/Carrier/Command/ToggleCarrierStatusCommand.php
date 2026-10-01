<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Toggles carrier status
 */
class ToggleCarrierStatusCommand
{
    /**
     * @param int $carrierId
     */
    public function __construct(int $carrierId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
     */
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
