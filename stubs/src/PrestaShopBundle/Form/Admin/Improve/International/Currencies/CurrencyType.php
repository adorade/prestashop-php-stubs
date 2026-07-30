<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Currencies;

/**
 * Class CurrencyType
 */
class CurrencyType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $allCurrencies
     * @param bool $isShopFeatureEnabled
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $allCurrencies, $isShopFeatureEnabled)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
