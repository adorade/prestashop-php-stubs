<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Locations;

final class ChangeCountriesZoneType extends \Symfony\Component\Form\AbstractType
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $zoneChoiceProvider)
    {
    }
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options): void
    {
    }
}
