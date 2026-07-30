<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds data of cart delivery option
 */
class CartDeliveryOption
{
    /**
     * @param int $carrierId
     * @param string $carrierName
     * @param string $carrierDelay
     */
    public function __construct(int $carrierId, string $carrierName, string $carrierDelay)
    {
    }
    /**
     * @return int
     */
    public function getCarrierId(): int
    {
    }
    /**
     * @return string
     */
    public function getCarrierName(): string
    {
    }
    /**
     * @return string
     */
    public function getCarrierDelay(): string
    {
    }
}
