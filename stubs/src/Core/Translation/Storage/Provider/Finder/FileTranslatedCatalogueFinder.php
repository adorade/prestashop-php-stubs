<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Finder;

/**
 * Gets catalogue within the files filtered by name in the directory given.
 * The translation files are searched in the subdirectory with the language name.
 * For example, if the main directory is 'myTranslationsDir',
 * if you call getCatalogue('fr_FR'), the translations files will be searched in 'myTranslationsDir/fr_FR'
 */
class FileTranslatedCatalogueFinder extends \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Finder\AbstractCatalogueFinder
{
    /**
     * @param string $translatedCatalogueDirectory
     * @param array $filenameFilters
     *
     * @throws TranslationFilesNotFoundException
     */
    public function __construct(string $translatedCatalogueDirectory, array $filenameFilters)
    {
    }
    /**
     * Returns the translation catalogue for the provided locale
     *
     * @param string $locale
     *
     * @return MessageCatalogue
     *
     * @throws TranslationFilesNotFoundException
     */
    public function getCatalogue(string $locale): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
