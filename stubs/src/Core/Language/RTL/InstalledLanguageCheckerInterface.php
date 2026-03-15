<?php

namespace PrestaShop\PrestaShop\Core\Language\RTL;

/**
 * Interface InstalledRtlLanguageCheckerInterface
 */
interface InstalledLanguageCheckerInterface
{
    /**
     * Check if there are at least one RTL language installed in shop.
     *
     * @return bool
     */
    public function isInstalledRtlLanguage();
}
