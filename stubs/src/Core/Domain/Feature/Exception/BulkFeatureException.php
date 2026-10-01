<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Exception;

class BulkFeatureException extends \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    public const FAILED_BULK_DELETE = 1;
    /**
     * @param \Throwable[] $exceptions
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(array $exceptions, string $message = 'Errors occurred during Feature bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getExceptions(): array
    {
    }
}
