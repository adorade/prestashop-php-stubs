<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Defines the integer type two inputs of min and max value - designed to fit grid in grid filter.
 */
final class IntegerMinMaxFilterType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
