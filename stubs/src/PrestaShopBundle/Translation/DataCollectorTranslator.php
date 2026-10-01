<?php

namespace PrestaShopBundle\Translation;

/**
 * This is the decorator of the framework DataCollectorTranslator service, it is required mostly
 * for the PrestaShopTranslatorTrait that handles fallback on legacy translation system when useful.
 *
 * We need to explicitly implement some method even if they are just proxies because the TranslatorLanguageLoader
 * checks their presence before calling them.
 */
class DataCollectorTranslator extends \Symfony\Component\Translation\DataCollectorTranslator implements \PrestaShopBundle\Translation\TranslatorInterface
{
    use \PrestaShopBundle\Translation\PrestaShopTranslatorTrait;
    public function addLoader(string $format, \Symfony\Component\Translation\Loader\LoaderInterface $loader)
    {
    }
    public function addResource(string $format, mixed $resource, string $locale, ?string $domain = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isLanguageLoaded($locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clearLanguage($locale)
    {
    }
}
