<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Is used to add field with recommended input length counter to the form.
 *
 * Requires Javasript text-with-recommended-lenght-counter.js to work properly.
 */
class TextWithRecommendedLengthType extends \Symfony\Component\Form\AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
