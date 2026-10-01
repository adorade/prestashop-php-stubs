<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

class ChangeStatesZoneType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zoneChoiceProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
