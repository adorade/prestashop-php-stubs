<?php

namespace PrestaShop\PrestaShop\Core\Translation\Exception;

/**
 * Thrown when an invalid key is found in a legacy translation file
 */
class InvalidLegacyTranslationKeyException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    public function __construct(string $missingElement, string $key, $code = 0, \Throwable $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getKey(): string
    {
    }
}
