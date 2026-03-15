<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class MoneyWithSuffixType is a money type,
 * which also has a suffix string right after the currency sign.
 */
class MoneyWithSuffixType extends \Symfony\Component\Form\Extension\Core\Type\MoneyType
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
