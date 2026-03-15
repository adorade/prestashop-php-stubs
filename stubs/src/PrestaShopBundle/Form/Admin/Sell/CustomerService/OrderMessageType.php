<?php

namespace PrestaShopBundle\Form\Admin\Sell\CustomerService;

/**
 * Backwards compatibility break introduced in 1.7.8.0 due to extension of TranslationAwareType instead of using trait
 *
 * Builds add/edit form for order message
 */
class OrderMessageType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
}
