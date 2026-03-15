<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\Exception;

/**
 * Thrown when trying to import already existing theme
 */
class ImportedThemeAlreadyExistsException extends \PrestaShop\PrestaShop\Core\Domain\Theme\Exception\ThemeException
{
    /**
     * @param ThemeName $themeName
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeName $themeName, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return ThemeName
     */
    public function getThemeName()
    {
    }
}
