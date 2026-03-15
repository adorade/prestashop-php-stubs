<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\CustomerPreferences;

/**
 * Class generates "General" form
 * in "Configure > Shop Parameters > Customer Settings" page.
 */
class GeneralType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @see MultistoreConfigurationTypeExtension
     */
    public function getParent(): string
    {
    }
}
