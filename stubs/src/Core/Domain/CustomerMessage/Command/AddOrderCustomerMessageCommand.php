<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Command;

/**
 * This command adds/sends message to the customer related with the order.
 */
class AddOrderCustomerMessageCommand
{
    /**
     * @param int $orderId
     * @param string $message
     * @param bool $isPrivate
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
     * @throws \PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Exception\CustomerMessageConstraintException
     */
    public function __construct(int $orderId, string $message, bool $isPrivate)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
    }
    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
    }
}
