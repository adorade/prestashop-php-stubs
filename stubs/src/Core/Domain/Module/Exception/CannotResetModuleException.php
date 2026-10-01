<?php

namespace PrestaShop\PrestaShop\Core\Domain\Module\Exception;

/**
 * Is thrown when required module cannot be found
 */
class CannotResetModuleException extends \PrestaShop\PrestaShop\Core\Domain\Module\Exception\ModuleException
{
    public const NOT_INSTALLED = 1;
    public const NOT_ACTIVE = 1;
}
