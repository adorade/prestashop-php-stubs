<?php

namespace PrestaShopBundle\Form\Admin\Sell\CustomerService\MerchandiseReturn;

/**
 * Form type for order returns options
 */
class OrderReturnType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * OrderReturnType constructor.
     *
     * @param TranslatorInterface $translator
     * @param array $locales
     * @param array $stateChoices
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, array $locales, array $stateChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
