<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form is used to show file type with preview images
 */
class ImageWithPreviewType extends \Symfony\Component\Form\Extension\Core\Type\FileType
{
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
    }
}
