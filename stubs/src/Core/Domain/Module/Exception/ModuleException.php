<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Exception;

/**
 * Base exception for Module sub-domain
 */
class ModuleException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    /**
     * When module cannot be used because it is disabled
     */
    public const IS_DISABLED = 1;
    /**
     * When module cannot be used because it is deleted
     */
    public const IS_DELETED = 2;
}
