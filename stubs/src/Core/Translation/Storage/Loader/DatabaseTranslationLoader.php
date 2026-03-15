<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Loader;

/**
 * The user translated catalogue is stored in database.
 * This class is a helper to build the query for retrieving the translations.
 * They depend on parameters like locale, theme or domain.
 */
class DatabaseTranslationLoader
{
    public function __construct(\PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $languageRepository, \PrestaShop\PrestaShop\Core\Translation\TranslationRepositoryInterface $translationRepository)
    {
    }
    /**
     * Loads all user translations according to search parameters
     *
     * @param string $locale Translation language
     * @param string $domain Regex for domain pattern search
     * @param string|null $theme A theme name
     *
     * @return MessageCatalogue A MessageCatalogue instance
     */
    public function load(string $locale, string $domain = 'messages', ?string $theme = null): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
