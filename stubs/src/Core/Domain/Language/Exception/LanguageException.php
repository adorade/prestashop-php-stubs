<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Exception;

/**
 * LanguageException is base exception for language subdomain
 */
class LanguageException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    /**
     * When language is not active
     */
    public const NOT_ACTIVE = 1;
}
