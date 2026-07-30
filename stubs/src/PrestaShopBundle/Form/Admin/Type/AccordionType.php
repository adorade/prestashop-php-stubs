<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used as a container of sub forms, each sub form will be rendered as a part of an accordion.
 */
class AccordionType extends \Symfony\Component\Form\AbstractType
{
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
