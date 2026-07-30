<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class FeaturesChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
