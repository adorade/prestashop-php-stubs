<?php

namespace PrestaShop\PrestaShop\Core\Translation\Builder;

/**
 * This class provides the catalogue represented as an array.
 * The catalogue is composed by domains, subdomains and messages in each of them.
 * A message has 3 layers : the default wording, the translation extracted from XLF and the one made by the Admin.
 * The representation also includes metadata to summarize number of translations and missing ones for each domain.
 * The catalogue can be extracted for a specific domain and filtered by domain or terms.
 */
class TranslationCatalogueBuilder
{
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\CatalogueProviderFactory $catalogueProviderFactory)
    {
    }
    /**
     * Returns the catalogue as array. This catalogue will contain only the required domain.
     * If search strings are provided, only messages which match them will be returned.
     * Catalogue is the combination of the 3 layers of catalogue : default, file-translated and user-translated.
     * User-translated will override file-translated, which will override default catalogue.
     * Each domain will have counters (number of items and missing translations) as metadata.
     * 'Normalization' will add extra data.
     *
     * @param ProviderDefinitionInterface $providerDefinition Translation storage provider configuration
     * @param string $locale
     * @param string $domain
     * @param array $search
     *
     * @return array
     *
     * @throws TranslationFilesNotFoundException
     * @throws UnexpectedTranslationTypeException
     */
    public function getDomainCatalogue(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition, string $locale, string $domain, array $search): array
    {
    }
    /**
     * Returns the catalogue as array. This catalogue will contain all available domains.
     * If search strings are provided, only messages which match them will be returned.
     * Catalogue is the combination of the 3 layers of catalogue : default, file-translated and user-translated.
     * User-translated will override file-translated, which will override default catalogue.
     * Each domain will have counters (number of items and missing translations) as metadata.
     *
     * @param ProviderDefinitionInterface $providerDefinition Translation storage provider configuration
     * @param string $locale
     * @param array $search
     *
     * @return array
     *
     * @throws TranslationFilesNotFoundException
     * @throws UnexpectedTranslationTypeException
     */
    public function getCatalogue(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition, string $locale, array $search): array
    {
    }
    /**
     * This method will return the catalogue as Translations DTO.
     * A translationsDTO contains domainTranslationsDTO which contains MessageTranslationsDTO.
     * Catalogue is the combination of the 3 layers of catalogue : default, file-translated and user-translated.
     * User-translated will override file-translated, which will override default catalogue.
     * Each domain will have counters (number of items and missing translations) as metadata.
     *
     * @param ProviderDefinitionInterface $providerDefinition Translation storage provider configuration
     * @param string $locale
     * @param array $search
     * @param string|null $domain
     *
     * @return Catalogue
     *
     * @throws TranslationFilesNotFoundException
     * @throws UnexpectedTranslationTypeException
     */
    public function getRawCatalogue(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition, string $locale, array $search, ?string $domain = null): \PrestaShop\PrestaShop\Core\Translation\Builder\Map\Catalogue
    {
    }
}
