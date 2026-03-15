<?php

namespace PrestaShopBundle\Translation;

/**
 * Replacement for the original Symfony FrameworkBundle translator
 */
class Translator extends \Symfony\Bundle\FrameworkBundle\Translation\Translator implements \PrestaShopBundle\Translation\TranslatorInterface
{
    use \PrestaShopBundle\Translation\PrestaShopTranslatorTrait;
    use \PrestaShopBundle\Translation\TranslatorLanguageTrait;
    /**
     * {@inheritdoc}
     */
    public function addResource($format, $resource, $locale, $domain = null)
    {
    }
}
