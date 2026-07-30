<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * It is extension of TextType that adds additonal button which allows generating value for input
 */
class GeneratableTextType extends \Symfony\Component\Form\AbstractType
{
    public const DEFAULT_GENERATED_VALUE_LENGTH = 32;
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
