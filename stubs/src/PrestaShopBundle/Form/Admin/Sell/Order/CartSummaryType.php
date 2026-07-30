<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

/**
 * Form type for cart summary block of order create page
 */
class CartSummaryType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param FormChoiceProviderInterface $orderStatesChoiceProvider
     * @param FormChoiceProviderInterface $paymentModulesChoiceProvider
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatesChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $paymentModulesChoiceProvider, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
