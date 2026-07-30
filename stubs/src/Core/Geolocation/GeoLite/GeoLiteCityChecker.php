<?php

namespace PrestaShop\PrestaShop\Core\Geolocation\GeoLite;

/**
 * Class GeoLiteCityChecker is responsible for checking if GeoLiteCity data is available.
 */
final class GeoLiteCityChecker implements \PrestaShop\PrestaShop\Core\Geolocation\GeoLite\GeoLiteCityCheckerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isAvailable()
    {
    }
}
