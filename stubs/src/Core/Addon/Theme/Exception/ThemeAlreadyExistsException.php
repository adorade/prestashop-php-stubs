<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme\Exception;

/**
 * Class ThemeAlreadyExistsException
 */
class ThemeAlreadyExistsException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * @param string $themeName
     * @param string $message
     * @param int $code
     * @param null $previous
     */
    public function __construct($themeName, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return string
     */
    public function getThemeName()
    {
    }
}
