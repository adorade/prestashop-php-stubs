<?php

namespace PrestaShopBundle\Form\Admin\Extension;

class MultistoreConfigurationTypeExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    public function __construct(\PrestaShopBundle\Service\Form\MultistoreCheckboxEnabler $multistoreCheckboxEnabler)
    {
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
    }
}
