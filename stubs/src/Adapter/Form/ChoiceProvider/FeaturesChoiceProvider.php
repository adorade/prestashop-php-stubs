<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class FeaturesChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureRepository $featureRepository, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, protected readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
