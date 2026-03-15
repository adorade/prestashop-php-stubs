<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class UpdateOrderStatusType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param ConfigurableFormChoiceProviderInterface $statusChoiceProvider
     * @param array $statusChoiceAttributes
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $statusChoiceProvider, array $statusChoiceAttributes)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
