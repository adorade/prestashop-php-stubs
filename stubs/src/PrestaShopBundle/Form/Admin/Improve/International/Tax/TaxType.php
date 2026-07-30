<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Tax;

/**
 * Backwards compatibility break introduced in 1.7.8.0 due to extension of TranslatorAwareType
 * Form type for tax add/edit
 */
class TaxType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
