<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\Pricing;

class ApplicableGroupsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface|\PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
     */
    protected $currencyByIdChoiceProvider;
    /**
     * @var \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
     */
    protected $countryByIdChoiceProvider;
    /**
     * @var \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
     */
    protected $groupByIdChoiceProvider;
    /**
     * @var \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
     */
    protected $shopByIdChoiceProvider;
    /**
     * @var string
     */
    protected $defaultCurrencySymbol;
    /**
     * @var bool
     */
    protected $isMultiShopEnabled;
    /**
     * @var int
     */
    protected $contextShopId;
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, $currencyByIdChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $countryByIdChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $groupByIdChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $shopByIdChoiceProvider, string $defaultCurrencySymbol, bool $isMultiShopEnabled, int $contextShopId)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
