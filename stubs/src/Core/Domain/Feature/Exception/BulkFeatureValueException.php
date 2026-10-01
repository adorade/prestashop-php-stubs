<?php

namespace PrestaShop\PrestaShop\Core\Domain\Feature\Exception;

class BulkFeatureValueException extends \PrestaShop\PrestaShop\Core\Domain\Feature\Exception\FeatureValueException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    public const FAILED_BULK_DELETE = 1;
    /**
     * @param \Throwable[] $exceptions
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(private readonly array $exceptions, string $message = 'Errors occurred during Feature value bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getExceptions(): array
    {
    }
}
