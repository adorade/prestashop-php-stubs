<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Exception;

class FailedToEnableThemeModuleException extends \PrestaShop\PrestaShop\Core\Domain\Theme\Exception\ThemeException
{
    public function __construct($moduleName, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getModuleName()
    {
    }
}
