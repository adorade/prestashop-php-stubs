<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class ChangeOrderAddressType extends \Symfony\Component\Form\AbstractType
{
    public const SHIPPING_TYPE = 'shipping';
    public const INVOICE_TYPE = 'invoice';
    /**
     * @param ConfigurableFormChoiceProviderInterface $customerAddressProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $customerAddressProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * @return array
     */
    public function getAvailableAddressTypes()
    {
    }
}
