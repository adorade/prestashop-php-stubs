<?php

namespace PrestaShopBundle\Translation;

/**
 * Translator used by Context
 */
class TranslatorComponent extends \Symfony\Component\Translation\Translator implements \PrestaShopBundle\Translation\TranslatorInterface
{
    use \PrestaShopBundle\Translation\PrestaShopTranslatorTrait;
    use \PrestaShopBundle\Translation\TranslatorLanguageTrait;
}
