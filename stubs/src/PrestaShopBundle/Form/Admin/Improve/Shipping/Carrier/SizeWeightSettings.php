<?php

namespace PrestaShopBundle\Form\Admin\Improve\Shipping\Carrier;

class SizeWeightSettings extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * @param \PrestaShopBundle\Translation\TranslatorInterface $translator
     * @param array $locales
     * @param string $dimensionUnit
     * @param string $weightUnit
     */
    public function __construct(\PrestaShopBundle\Translation\TranslatorInterface $translator, array $locales, private string $dimensionUnit, private string $weightUnit)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
}
