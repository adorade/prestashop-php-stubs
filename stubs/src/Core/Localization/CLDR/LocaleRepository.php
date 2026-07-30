<?php

namespace PrestaShop\PrestaShop\Core\Localization\CLDR;

/**
 * CLDR Locale Repository.
 *
 * Provides CLDR Locale objects
 */
class LocaleRepository
{
    /**
     * @var LocaleDataSource
     */
    protected $dataSource;
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource $dataSource)
    {
    }
    /**
     * Get a CLDR Locale by simplified IETF tag.
     *
     * @param string $localeCode e.g.: fr-FR, en-US...
     *
     * @return CldrLocale|null A CldrLocale object. Null if not found
     */
    public function getLocale($localeCode)
    {
    }
}
