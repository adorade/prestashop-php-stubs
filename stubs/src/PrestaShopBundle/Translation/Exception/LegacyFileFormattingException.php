<?php

namespace PrestaShopBundle\Translation\Exception;

/**
 * Will be thrown if a legacy file for a locale is found, but invalid.
 */
final class LegacyFileFormattingException extends \Symfony\Component\Translation\Exception\InvalidResourceException
{
    /**
     * @param string $filePath the expected file path of the translations
     * @param string $locale the translation locale
     *
     * @return self
     */
    public static function fileIsInvalid($filePath, $locale)
    {
    }
}
