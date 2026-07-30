<?php

namespace PrestaShop\PrestaShop\Core\Translation\Export;

/**
 * This class is responsible of building translation catalogues exports.
 * It uses TranslationCatalogueBuilder to get the catalogues content, dump them in files and return them to caller in the desired format.
 */
class TranslationCatalogueExporter
{
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Builder\TranslationCatalogueBuilder $translationCatalogueBuilder, \PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionFactory $providerDefinitionFactory, \PrestaShop\TranslationToolsBundle\Translation\Dumper\XliffFileDumper $dumper, \Symfony\Component\Filesystem\Filesystem $filesystem, \PrestaShopBundle\Utils\ZipManager $zipManager, string $exportDir)
    {
    }
    /**
     * Exports the translation catalogues depending on the selections provided in the given locale.
     * Catalogues are written in XLF files and stored in a folder with the locale name.
     * This folder is then compressed in a zip file. The returned value is the path of the created zip file.
     *
     * The expected format for $selections parameter is
     * [
     *   [
     *     'type' => string, // Translation type, allowed in ProviderDefinitionInterface::ALLOWED_EXPORT_TYPES
     *     'selected' => string|null // Must be defined if translation type is themes or modules, otherwise NULL
     *   ],
     *   ...
     * ]
     *
     * @param array $selections
     * @param string $locale
     *
     * @return string The zip file with catalogues exported
     *
     * @throws TranslationFilesNotFoundException
     * @throws UnexpectedTranslationTypeException
     * @throws IOException
     */
    public function export(array $selections, string $locale): string
    {
    }
    /**
     * After export, our files are named with their domain only, FullDomainName.xlf for example.
     * This method will append the locale name to the end of the file, so the result is something like
     * FullDomainName.ab-AB.xlf
     *
     * @param string $locale Locale to append to filenames
     * @param string $path Folder to work in
     */
    protected function renameCatalogues(string $locale, string $path): void
    {
    }
}
