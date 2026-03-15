<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\Exception;

/**
 * Base exception for Currency sub-domain
 */
class CurrencyException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    /**
     * When currency cannot be used because it is disabled
     */
    public const IS_DISABLED = 1;
    /**
     * When currency cannot be used because it is deleted
     */
    public const IS_DELETED = 2;
}
