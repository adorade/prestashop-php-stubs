<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

/**
 * Form type for cart summary block of order create page
 */
class CartSummaryType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatesChoiceProvider
     * @param \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $paymentModulesChoiceProvider
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
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
