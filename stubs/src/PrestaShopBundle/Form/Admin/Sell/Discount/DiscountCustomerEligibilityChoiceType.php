<?php

namespace PrestaShopBundle\Form\Admin\Sell\Discount;

class DiscountCustomerEligibilityChoiceType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const ALL_CUSTOMERS = 'all_customers';
    public const CUSTOMER_GROUPS = 'customer_groups';
    public const SINGLE_CUSTOMER = 'single_customer';
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $groupByIdChoiceProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getParent()
    {
    }
}
