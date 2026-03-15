<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Finder;

/**
 * Gets catalogue translated by the user himself ans stored in the database.
 */
class UserTranslatedCatalogueFinder extends \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Finder\AbstractCatalogueFinder
{
    /**
     * You will need to give theme if you want only the translations linked to a specific theme.
     * If not given, the translations returns will be the ones with 'theme IS NULL'
     *
     * @param DatabaseTranslationLoader $databaseTranslationReader
     * @param array<int, string> $translationDomains
     * @param string|null $themeName
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Loader\DatabaseTranslationLoader $databaseTranslationReader, array $translationDomains, ?string $themeName = null)
    {
    }
    /**
     * Returns the translation catalogue for the provided locale
     *
     * @param string $locale
     *
     * @return MessageCatalogue
     */
    public function getCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
