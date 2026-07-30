<?php

namespace PrestaShopBundle\Translation\Factory;

/**
 * This class returns a collection of translations, using a locale and an identifier.
 *
 * Returns MessageCatalogue object or Translation tree array.
 */
class TranslationsFactory implements \PrestaShopBundle\Translation\Factory\TranslationsFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createCatalogue($domainIdentifier, $locale = 'en_US')
    {
    }
    /**
     * @param string $domainIdentifier
     * @param string $locale
     * @param string|null $theme
     * @param string|null $search
     *
     * @return array|mixed
     *
     * @throws ProviderNotFoundException
     */
    public function createTranslationsArray($domainIdentifier, $locale = self::DEFAULT_LOCALE, $theme = null, $search = null)
    {
    }
    /**
     * @param AbstractProvider $provider
     */
    public function addProvider(\PrestaShopBundle\Translation\Provider\AbstractProvider $provider)
    {
    }
}
