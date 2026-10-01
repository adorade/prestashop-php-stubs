<?php

namespace PrestaShop\PrestaShop\Core\Translation\Exception;

/**
 * Will be thrown if a locale is not supported in Legacy format
 */
final class UnsupportedLocaleException extends \Symfony\Component\Translation\Exception\NotFoundResourceException
{
    /**
     * @param string $filePath the expected file path of the translations
     * @param string $locale the translation locale
     *
     * @return self
     */
    public static function fileNotFound(string $filePath, string $locale): self
    {
    }
    /**
     * @param string $locale the translation locale
     *
     * @return self
     */
    public static function invalidLocale($locale)
    {
    }
}
