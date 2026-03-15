<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order\CreditSlip;

/**
 * Backwards compatibility break introduced in 1.7.8.0 due to extension of TranslationAwareType instead of using translator as dependency.
 *
 * Defines credit slips options form
 */
final class CreditSlipOptionsType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
