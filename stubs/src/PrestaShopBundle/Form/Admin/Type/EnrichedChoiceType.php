<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is basically a choice types, but it offers a more enriched UX
 * instead of relying on radio buttons each choice is displayed with a div block
 * in which you can specify more details that the option name:
 *   - add help message for more details about the choice
 *   - add icon on each choice
 *
 * Note: so far only tested with radio buttons (expanded: true, multiple: false), other
 * configurations will likely need appropriate improvements at least in the PrestaShop
 * UI kit form theme.
 */
class EnrichedChoiceType extends \Symfony\Component\Form\Extension\Core\Type\ChoiceType
{
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    public function getBlockPrefix(): string
    {
    }
}
