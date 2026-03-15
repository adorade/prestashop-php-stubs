<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class UpdateOrderShippingType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param ConfigurableFormChoiceProviderInterface $carrierForOrderChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $carrierForOrderChoiceProvider)
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
}
