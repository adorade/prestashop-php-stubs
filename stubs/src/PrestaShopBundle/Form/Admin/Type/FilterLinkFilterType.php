<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Generic form type for filter link groups.
 * This creates a hidden field that can be controlled by a FilterLinkGroup component.
 */
class FilterLinkFilterType extends \Symfony\Component\Form\AbstractType
{
    public function getParent(): string
    {
    }
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    public function getBlockPrefix(): string
    {
    }
}
