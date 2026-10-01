<?php

namespace PrestaShopBundle\Translation;

class DataCollectorTranslator extends \Symfony\Component\Translation\DataCollectorTranslator implements \PrestaShopBundle\Translation\TranslatorInterface
{
    use \PrestaShopBundle\Translation\PrestaShopTranslatorTrait;
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
