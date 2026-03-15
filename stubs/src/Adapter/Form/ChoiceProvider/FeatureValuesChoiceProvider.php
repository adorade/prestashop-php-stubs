<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class FeatureValuesChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices(array $options)
    {
    }
}
