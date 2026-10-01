<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Throw when failed changing order status
 */
class ChangeOrderStatusException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId[] $ordersWithFailedToUpdateStatus
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId[] $ordersWithFailedToSendEmail
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId[] $ordersWithAssignedStatus
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(array $ordersWithFailedToUpdateStatus, array $ordersWithFailedToSendEmail, array $ordersWithAssignedStatus, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId[]
     */
    public function getOrdersWithFailedToUpdateStatus()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId[]
     */
    public function getOrdersWithFailedToSendEmail()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId[]
     */
    public function getOrdersWithAssignedStatus()
    {
    }
}
