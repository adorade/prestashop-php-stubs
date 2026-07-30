<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Finder;

/**
 * Gets catalogue within the files filtered by name in the directory given.
 * The Default catalogue is the base wording, in english, and stored in filesystem or extracted from templates.
 */
class DefaultCatalogueFinder extends \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Finder\AbstractCatalogueFinder
{
    /**
     * @param string $defaultCatalogueDirectory Directory where to look files
     * @param string[] $filenameFilters Array of globs to use to match files
     *
     * @throws TranslationFilesNotFoundException
     */
    public function __construct(string $defaultCatalogueDirectory, array $filenameFilters)
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
    /**
     * Empties out the catalogue by removing translations but leaving keys
     *
     * @param MessageCatalogue $messageCatalogue
     *
     * @return MessageCatalogue Empty the catalogue
     */
    protected function emptyCatalogue(\Symfony\Component\Translation\MessageCatalogue $messageCatalogue): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
