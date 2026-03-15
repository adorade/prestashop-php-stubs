<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Exception;

/**
 * Thrown when order message is not found
 */
class OrderMessageNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\OrderMessage\Exception\OrderMessageException
{
    /**
     * @param OrderMessageId $orderMessageId
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId $orderMessageId, string $message = '', int $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return OrderMessageId
     */
    public function getOrderMessageId(): \PrestaShop\PrestaShop\Core\Domain\OrderMessage\ValueObject\OrderMessageId
    {
    }
}
