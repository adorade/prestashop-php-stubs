<?php

namespace PrestaShop\PrestaShop\Core\Language;

/**
 * Interface LanguageValidatorInterface defines contract for LanguageValidator.
 */
interface LanguageValidatorInterface
{
    /**
     * Checks if language is installed by comparing locale.
     *
     * @param string $locale
     *
     * @return bool
     */
    public function isInstalledByLocale($locale);
}
