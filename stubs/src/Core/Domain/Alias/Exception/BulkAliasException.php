<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Exception;

/**
 * Base class to use for bulk operations, it stores a list of exception indexed by the alias ID that was impacted.
 * It should be used as a base class for all the bulk action exceptions.
 */
class BulkAliasException extends \PrestaShop\PrestaShop\Core\Domain\Alias\Exception\AliasException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    /**
     * @param \Throwable[] $exceptions
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(private readonly array $exceptions, string $message = 'Errors occurred during Alias bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getExceptions(): array
    {
    }
}
