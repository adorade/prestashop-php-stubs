<?php

namespace PrestaShop\PrestaShop\Core\Localization\Pack\Loader;

/**
 * Class AbstractLocalizationPackLoader is abstract localization pack loader that implements XML loading from file.
 */
abstract class AbstractLocalizationPackLoader implements \PrestaShop\PrestaShop\Core\Localization\Pack\Loader\LocalizationPackLoaderInterface
{
    /**
     * Loads XML from local or remote file.
     *
     * @param string $file
     *
     * @return SimpleXMLElement|null
     */
    protected function loadXml($file)
    {
    }
}
