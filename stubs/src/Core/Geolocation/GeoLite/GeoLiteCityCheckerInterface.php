<?php

namespace PrestaShop\PrestaShop\Core\Geolocation\GeoLite;

/**
 * Interface GeoLiteCityInterface defines contract for GeoLiteCity.
 */
interface GeoLiteCityCheckerInterface
{
    /**
     * Check if GeoLiteCity data is available in PrestaShop installation.
     *
     * @return bool
     */
    public function isAvailable();
}
