<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Loader;

/**
 * Able to convert old translation files (in translations/es.php) into
 * Symfony MessageCatalogue objects.
 */
final class LegacyFileLoader implements \Symfony\Component\Translation\Loader\LoaderInterface
{
    /**
     * @param LegacyFileReader $fileReader
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Translation\Storage\Loader\LegacyFileReader $fileReader)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Note that parameter "domain" is useless, as domain is inferred from source files
     *
     * @throws InvalidLegacyTranslationKeyException
     */
    public function load($path, $locale, $domain = 'messages'): \Symfony\Component\Translation\MessageCatalogue
    {
    }
}
