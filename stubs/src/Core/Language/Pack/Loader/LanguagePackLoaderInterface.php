<?php

namespace PrestaShop\PrestaShop\Core\Language\Pack\Loader;

/**
 * Interface LanguagePackLoaderInterface defines contract for language pack loader.
 */
interface LanguagePackLoaderInterface
{
    /**
     * Gets language pack data.
     *
     * @return array - array key is the language locale and the value is language name
     */
    public function getLanguagePackList();
}
