<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * LocaleDataSource provides CLDR LocaleData objects.
 *
 * This class uses Locale data layers as middlewares stack to read CLDR data.
 */
class LocaleDataSource
{
    /**
     * LocaleDataSource constructor needs a CldrLocaleDataLayerInterface layer object.
     * This top layer might be chained with lower layers and will be the entry point of this middleware stack.
     *
     * @param CldrLocaleDataLayerInterface $topLayer
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataLayerInterface $topLayer)
    {
    }
    /**
     * @param string $localeCode
     *
     * @return LocaleData|null
     */
    public function getLocaleData($localeCode)
    {
    }
}
