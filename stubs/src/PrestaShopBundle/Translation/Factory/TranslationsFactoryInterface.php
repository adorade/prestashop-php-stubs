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
     * @return \Symfony\Component\Translation\MessageCatalogueInterface
     *
     * @throws ProviderNotFoundException
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
     * @return array Translation tree structure
     *
     * @throws ProviderNotFoundException
     */
    public function createTranslationsArray($domainIdentifier, $locale = self::DEFAULT_LOCALE, $theme = null, $search = null);
}
