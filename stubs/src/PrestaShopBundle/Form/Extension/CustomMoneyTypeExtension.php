<?php

namespace PrestaShopBundle\Form\Extension;

class CustomMoneyTypeExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale $locale
     * @param int $defaultCurrencyId
     * @param \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository
     * @param \PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer $localeNumberTransformer
     */
    public function __construct(private \PrestaShop\PrestaShop\Core\Localization\Locale $locale, private int $defaultCurrencyId, private \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, private \PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer $localeNumberTransformer)
    {
    }
    public static function getExtendedTypes(): iterable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
