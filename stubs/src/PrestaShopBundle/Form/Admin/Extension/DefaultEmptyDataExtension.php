<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * Class DefaultEmptyDataExtension extends every form type with additional default_empty_data option.
 */
class DefaultEmptyDataExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
    }
}
