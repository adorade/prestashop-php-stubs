<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

class StateType extends \Symfony\Component\Form\AbstractType
{
    /**
     * StateType constructor.
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $countriesChoiceProvider
     * @param \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zonesChoiceProvider
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $countriesChoiceProvider, \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zonesChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
