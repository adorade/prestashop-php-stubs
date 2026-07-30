<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used to display an image value without providing an interactive input to edit it.
 * It is based on a hidden input so it could be changed programmatically, or be used just to display
 * an image in a form.
 */
class ImagePreviewType extends \Symfony\Component\Form\Extension\Core\Type\HiddenType
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
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
    }
}
