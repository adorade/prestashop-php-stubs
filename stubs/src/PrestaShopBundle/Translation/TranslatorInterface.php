<?php

namespace PrestaShopBundle\Translation;

/**
 * Interface for PrestaShop translators
 */
interface TranslatorInterface extends \Symfony\Contracts\Translation\TranslatorInterface
{
    /**
     * Performs a reverse search in the catalogue and returns the translation key if found.
     * AVOID USING THIS, IT PROVIDES APPROXIMATE RESULTS.
     *
     * @param string $translated Translated string
     * @param string $domain Translation domain
     * @param string|null $locale Unused
     *
     * @return string The translation
     *
     * @deprecated This method should not be used and will be removed
     */
    public function getSourceString($translated, $domain, $locale = null);
    /**
     * @param string $locale Locale code for the catalogue to check if loaded
     *
     * @return bool
     */
    public function isLanguageLoaded($locale);
    /**
     * @param string $locale Locale code for the catalogue to be cleared
     */
    public function clearLanguage($locale);
}
