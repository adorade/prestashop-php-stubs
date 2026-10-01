<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Tax;

/**
 * Form type that renders the "Add a tax rule" button and the inline tax rules list.
 * Intended to be embedded in TaxRulesGroupType when editing an existing group.
 */
class TaxRulesType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
}
