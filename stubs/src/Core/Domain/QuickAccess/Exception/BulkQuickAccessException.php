<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Exception;

class BulkQuickAccessException extends \PrestaShop\PrestaShop\Core\Domain\QuickAccess\Exception\QuickAccessException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    /** @param \Throwable[] $exceptions */
    public function __construct(private readonly array $exceptions, string $message = 'Errors occurred during Quick Access bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function getExceptions(): array
    {
    }
}
