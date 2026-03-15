<?php

namespace PrestaShopBundle\Service;

class TranslationService
{
    /**
     * @var Container
     */
    public $container;
    /**
     * @param string $lang
     *
     * @return mixed
     */
    public function langToLocale($lang)
    {
    }
    /**
     * @param string $locale
     *
     * @return Lang
     *
     * @throws InvalidLanguageException
     */
    public function findLanguageByLocale($locale)
    {
    }
    /**
     * @param string $lang
     * @param string|null $type
     * @param string|null $theme
     * @param string|null $search
     *
     * @return array|mixed
     */
    public function getTranslationsCatalogue($lang, $type, $theme, $search = null)
    {
    }
    /**
     * Returns the translation domains tree and counters with total of wording and total of missing translations
     * The tree should look like
     *  tree => [
     *      total_translations => int
     *      total_missing_translations => int
     *      children => [
     *          [
     *              name => string
     *              full_name => string
     *              domain_catalog_link => string
     *              total_translations => int
     *              total_missing_translations => int
     *              children => [
     *                  ...
     *              ]
     *          ]
     *   ]
     *
     * @param ProviderDefinitionInterface $providerDefinition
     * @param string $locale
     * @param array $search
     *
     * @return array
     *
     * @throws Exception
     */
    public function getTranslationsTree(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition, string $locale, array $search): array
    {
    }
    /**
     * List translations for a specific domain.
     *
     * @param ProviderDefinitionInterface $providerDefinition
     * @param string $locale
     * @param string $domain
     * @param array|null $search
     *
     * @return array
     *
     * @throws Exception
     * @todo: we need module information here
     * @todo: we need to improve the Vuejs application to send the information
     */
    public function listDomainTranslation(\PrestaShop\PrestaShop\Core\Translation\Storage\Provider\Definition\ProviderDefinitionInterface $providerDefinition, string $locale, string $domain, ?array $search = null): array
    {
    }
    /**
     * Save a translation in database.
     *
     * @param Lang $lang
     * @param string $domain
     * @param string $key
     * @param string $translationValue
     * @param string|null $theme
     *
     * @return bool
     */
    public function saveTranslationMessage($lang, $domain, $key, $translationValue, $theme = null)
    {
    }
    /**
     * Reset translation from database.
     *
     * @param Lang $lang
     * @param string $domain
     * @param string $key
     * @param string|null $theme
     *
     * @return bool
     */
    public function resetTranslationMessage($lang, $domain, $key, $theme = null)
    {
    }
}
