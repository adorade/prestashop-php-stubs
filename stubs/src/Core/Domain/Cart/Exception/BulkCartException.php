<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Exception;

/**
 * Base class to use for bulk operations, it stores a list of exception indexed by the carts ID that was impacted.
 * It should be used as a base class for all the bulk action exceptions.
 */
class BulkCartException extends \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    /**
     * @param \Throwable[] $exceptions
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(private readonly array $exceptions, string $message = 'Errors occurred during Cart bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getExceptions(): array
    {
    }
}
