<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used to display a text value without providing an interactive input to edit it.
 * It is based on a hidden input so it could be changed programmatically, or be used just to display
 * a data in a form.
 */
class TextPreviewType extends \Symfony\Component\Form\Extension\Core\Type\TextType
{
    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
