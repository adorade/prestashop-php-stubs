<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\ValueObject;

/**
 * Order identity
 */
class OrderId
{
    /**
     * @param int $orderId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     */
    public function __construct($orderId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
