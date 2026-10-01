<?php

namespace PrestaShopBundle\Form\Admin\Sell\CustomerService\OrderReturn;

/**
 * Form type for order return (merchandise return) options
 */
class OrderReturnOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const FIELD_ENABLE_ORDER_RETURN = 'enable_order_return';
    public const FIELD_ORDER_RETURN_PERIOD_IN_DAYS = 'order_return_period_in_days';
    public const FIELD_ORDER_RETURN_PREFIX = 'order_return_prefix';
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @see MultistoreConfigurationTypeExtension
     */
    public function getParent(): string
    {
    }
}
