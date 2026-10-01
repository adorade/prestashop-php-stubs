<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This type is used by the DisablingExtension and automatically added on form fields which have
 * the disabling_switcher option enabled.
 *
 * @todo: this type doesn't seem to work on its own (e.g. when trying $builder->add('foo', DisablingSwitchType))
 */
class DisablingSwitchType extends \PrestaShopBundle\Form\Admin\Type\SwitchType
{
    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function getParent(): string
    {
    }
}
