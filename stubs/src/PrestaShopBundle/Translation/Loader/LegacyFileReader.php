<?php

namespace PrestaShopBundle\Translation\Loader;

/**
 * Reads legacy locale files
 */
class LegacyFileReader
{
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Locale\Converter $converter)
    {
    }
    /**
     * Loads legacy translations from a file
     *
     * @param string $path Path where the locale file should be looked up
     * @param string $locale IETF language tag
     *
     * @return array Translation tokens
     */
    public function load($path, $locale)
    {
    }
}
