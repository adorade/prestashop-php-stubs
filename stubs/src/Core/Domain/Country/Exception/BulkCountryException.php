<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Exception;

final class BulkCountryException extends \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryException implements \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
{
    public const FAILED_BULK_UPDATE_STATUS = 1;
    public const FAILED_BULK_UPDATE_ZONE = 2;
    public const FAILED_BULK_DELETE = 3;
    /**
     * @param \Throwable[] $exceptions
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(private readonly array $exceptions, string $message = 'Errors occurred during country bulk action', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getExceptions(): array
    {
    }
}
