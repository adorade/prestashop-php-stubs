<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier;

/**
 * Provides reusable methods for carrier command/query handlers
 */
abstract class AbstractCarrierHandler
{
    protected function getCarrier(\PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId $carrierId)
    {
    }
}
