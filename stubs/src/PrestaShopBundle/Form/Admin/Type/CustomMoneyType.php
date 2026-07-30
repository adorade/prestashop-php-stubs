<?php

namespace PrestaShopBundle\Form\Admin\Type;

// TODO: in 9.0, we need to migrate this class into PrestaShopBundle/Form/Extension/MoneyTypeExtension
class CustomMoneyType extends \Symfony\Component\Form\AbstractTypeExtension
{
    public const PRESTASHOP_DECIMALS = 6;
    /**
     * @param Locale $locale
     * @param int $defaultCurrencyId
     * @param CurrencyRepository $currencyRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\Locale $locale, int $defaultCurrencyId, \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, \PrestaShop\PrestaShop\Core\Localization\Number\LocaleNumberTransformer $localeNumberTransformer)
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
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
}
