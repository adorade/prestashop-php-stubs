<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

class ChangeOrderCurrencyType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param FormChoiceProviderInterface $currencyChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $currencyChoiceProvider)
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
