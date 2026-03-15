<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class responsible for providing configurable countries list
 */
class ConfigurableCountryChoiceType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param ConfigurableFormChoiceProviderInterface $countriesChoiceProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $countriesChoiceProvider)
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
    public function getParent()
    {
    }
}
