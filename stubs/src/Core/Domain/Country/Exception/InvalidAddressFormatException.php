<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\Exception;

/**
 * Thrown when a country's address format is rejected by AddressFormatChecker.
 * Carries the list of (already translated) error messages so the Admin API or
 * any non-form CQRS consumer can surface them.
 */
final class InvalidAddressFormatException extends \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
{
    /**
     * @param string[] $errors
     */
    public function __construct(array $errors, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
    }
    /**
     * @return string[]
     */
    public function getErrors(): array
    {
    }
}
