<?php

namespace PrestaShop\PrestaShop\Core\Localization\Locale;

interface RepositoryInterface
{
    /**
     * Get a Locale instance by locale code.
     *
     * @param string $localeCode
     *                           The locale code (simplified IETF tag syntax)
     *                           Combination of ISO 639-1 (2-letters language code) and ISO 3166-2 (2-letters region code)
     *                           eg: fr-FR, en-US
     *
     * @return Locale
     *                A Locale instance
     */
    public function getLocale($localeCode);
}
