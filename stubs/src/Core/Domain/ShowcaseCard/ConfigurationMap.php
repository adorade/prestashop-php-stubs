<?php

namespace PrestaShop\PrestaShop\Core\Domain\ShowcaseCard;

/**
 * Maps showcase card names to configuration names from ps_configuration
 */
class ConfigurationMap
{
    /**
     * Template used to create configuration names for "closed status"
     */
    public const CLOSED_TEMPLATE = 'PS_SHOWCASECARD_%s_CLOSED';
    public function __construct()
    {
    }
    /**
     * Returns the ps_configuration configuration name for "closed status" of the provided card
     *
     * @param ShowcaseCard $cardName
     *
     * @return string
     *
     * @throws ShowcaseCardException If there's no configuration for that showcase card
     */
    public function getConfigurationNameForClosedStatus(\PrestaShop\PrestaShop\Core\Domain\ShowcaseCard\ValueObject\ShowcaseCard $cardName)
    {
    }
}
