<?php

namespace PrestaShopBundle\Translation\Factory;

interface TranslationsFactoryInterface
{
    public const DEFAULT_LOCALE = 'en_US';
    /**
     * Generates extract of global Catalogue, using domain's identifiers.
     *
     * @param string $identifier Domain identifier
     * @param string $locale Locale identifier
     *
     * @throws ProviderNotFoundException
     *
     * @return MessageCatalogueInterface
     */
    public function createCatalogue($identifier, $locale = self::DEFAULT_LOCALE);
    /**
     * Generates Translation tree in Back Office.
     *
     * @param string $domainIdentifier Domain identifier
     * @param string $locale Locale identifier
     * @param null $theme
     * @param null $search
     *
     * @throws ProviderNotFoundException
     *
     * @return array Translation tree structure
     */
    public function createTranslationsArray($domainIdentifier, $locale = self::DEFAULT_LOCALE, $theme = null, $search = null);
}
