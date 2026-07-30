<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Combination;

class CombinationPriceImpactType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var Currency
     */
    protected $defaultCurrency;
    /**
     * @var string
     */
    protected $weightUnit;
    /**
     * @var bool
     */
    protected $isTaxEnabled;
    /**
     * @var bool
     */
    protected $isEcotaxEnabled;
    /**
     * @var int
     */
    protected $ecoTaxGroupId;
    /**
     * @var TaxComputer
     */
    protected $taxComputer;
    /**
     * @var int
     */
    protected $contextCountryId;
    /**
     * @var Locale
     */
    protected $contextLocale;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \Currency $defaultCurrency, string $weightUnit, bool $isTaxEnabled, bool $isEcotaxEnabled, int $ecoTaxGroupId, \PrestaShop\PrestaShop\Adapter\Tax\TaxComputer $taxComputer, int $contextCountryId, \PrestaShop\PrestaShop\Core\Localization\Locale $contextLocale)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
