<?php

namespace PrestaShopBundle\Translation\Loader;

/**
 * Able to convert old translation files (in translations/es.php) into
 * Symfony MessageCatalogue objects.
 */
final class LegacyFileLoader implements \Symfony\Component\Translation\Loader\LoaderInterface
{
    /**
     * @param LegacyFileReader $fileReader
     */
    public function __construct(\PrestaShopBundle\Translation\Loader\LegacyFileReader $fileReader)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Note that parameter "domain" is useless, as domain is inferred from source files
     *
     * @throws \PrestaShopBundle\Translation\Exception\InvalidLegacyTranslationKeyException
     */
    public function load($path, $locale, $domain = 'messages')
    {
    }
}
