<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Class DuplicateProductInOrderInvoiceException thrown when we try to add a product in an order invoice that already contains it
 */
class DuplicateProductInOrderInvoiceException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\DuplicateProductInOrderException
{
    /**
     * @param string $orderInvoiceId
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $orderInvoiceId, $message = '', $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getOrderInvoiceNumber(): string
    {
    }
}
