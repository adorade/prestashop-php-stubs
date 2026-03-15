<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Throw when failed changing order status
 */
class ChangeOrderStatusException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
    /**
     * @param OrderId[] $ordersWithFailedToUpdateStatus
     * @param OrderId[] $ordersWithFailedToSendEmail
     * @param OrderId[] $ordersWithAssignedStatus
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(array $ordersWithFailedToUpdateStatus, array $ordersWithFailedToSendEmail, array $ordersWithAssignedStatus, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return OrderId[]
     */
    public function getOrdersWithFailedToUpdateStatus()
    {
    }
    /**
     * @return OrderId[]
     */
    public function getOrdersWithFailedToSendEmail()
    {
    }
    /**
     * @return OrderId[]
     */
    public function getOrdersWithAssignedStatus()
    {
    }
}
