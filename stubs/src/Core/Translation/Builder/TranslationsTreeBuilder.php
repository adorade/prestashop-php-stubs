<?php

namespace PrestaShop\PrestaShop\Core\Translation\Builder;

/**
 * Builds a domain tree for the translation API.
 *
 * The tree will have any necessary information to display it in the interface :
 * domain names, counter, missing translations and link to access catalogue.
 */
class TranslationsTreeBuilder
{
    /**
     * @param Router $router
     * @param TranslationCatalogueBuilder $translationCatalogueBuilder
     */
    public function __construct(\Symfony\Bundle\FrameworkBundle\Routing\Router $router, \PrestaShop\PrestaShop\Core\Translation\Builder\TranslationCatalogueBuilder $translationCatalogueBuilder)
    {
    }
    /**
     * @param ProviderDefinitionInterface $providerDefinition
     * @param string $locale
     * @param array $search
     *
     * @return array
     *
     * @throws TranslationFilesNotFoundException
     * @throws UnexpectedTranslationTypeException
     */
    public function getTree(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition, string $locale, array $search): array
    {
    }
}
