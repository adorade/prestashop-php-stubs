<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Displays a switch (ON / OFF by default).
 */
class SwitchType extends \Symfony\Component\Form\AbstractType
{
    public const TRANS_DOMAIN = 'Admin.Global';
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
