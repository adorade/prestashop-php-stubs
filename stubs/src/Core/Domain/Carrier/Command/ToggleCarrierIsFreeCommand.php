<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Toggles carrier is-free status
 */
class ToggleCarrierIsFreeCommand
{
    /**
     * @param int $carrierId
     */
    public function __construct(int $carrierId)
    {
    }
    /**
     * @return CarrierId
     */
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
