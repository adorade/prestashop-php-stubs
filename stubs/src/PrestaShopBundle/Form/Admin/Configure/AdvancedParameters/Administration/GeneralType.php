<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration;

class GeneralType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    public const FIELD_FRONT_COOKIE_LIFETIME = 'front_cookie_lifetime';
    public const FIELD_BACK_COOKIE_LIFETIME = 'back_cookie_lifetime';
    public const FIELD_COOKIE_SAMESITE = 'cookie_samesite';
    /**
     * {@inheritdoc}
     */
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
}
