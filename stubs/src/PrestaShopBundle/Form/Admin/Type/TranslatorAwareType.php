<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * PrestaShop forms needs custom domain name for field constraints
 * This feature is not available in Symfony so we need to inject the translator
 * for constraints messages only.
 */
abstract class TranslatorAwareType extends \PrestaShopBundle\Form\Admin\Type\CommonAbstractType
{
    /**
     * All languages available on shop. Used for translations.
     *
     * @param array<int, array<string, mixed>> $locales
     */
    protected $locales;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales)
    {
    }
    /**
     * Get the translated chain from key.
     *
     * @param string $key the key to be translated
     * @param string $domain the domain to be selected
     * @param array $parameters Optional, pass parameters if needed (uncommon)
     *
     * @returns string
     */
    protected function trans($key, $domain, $parameters = [])
    {
    }
    /**
     * @return TranslatorInterface
     */
    protected function getTranslator(): \Symfony\Contracts\Translation\TranslatorInterface
    {
    }
    /**
     * Get locales to be used in form type.
     *
     * @return array
     */
    protected function getLocaleChoices()
    {
    }
}
