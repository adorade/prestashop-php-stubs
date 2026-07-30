<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class ChangeOrdersStatusType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param FormChoiceProviderInterface $orderStatusChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $orderStatusChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
