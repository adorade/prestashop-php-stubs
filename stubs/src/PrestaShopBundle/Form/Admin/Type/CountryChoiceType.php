<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class CountryChoiceType is responsible for providing country choices with -- symbol in front of array.
 */
class CountryChoiceType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param FormChoiceProviderInterface $countriesChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $countriesChoiceProvider, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface $countriesAttrChoicesProvider)
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
    public function getChoiceAttr($value, $key)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
