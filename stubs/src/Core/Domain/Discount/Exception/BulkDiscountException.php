<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Exception;

class BulkDiscountException extends \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    public const FAILED_BULK_DELETE = 1;
    public const FAILED_BULK_UPDATE_STATUS = 2;
    /**
     * @param \Throwable[] $exceptions
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(array $exceptions, string $message = 'Errors occurred during discount bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getExceptions(): array
    {
    }
}
