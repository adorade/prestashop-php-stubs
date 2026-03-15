<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Geolocation;

/**
 * Class GeolocationByIpAddressFormDataProvider is responsible for handling geolocation form data.
 */
final class GeolocationByIpAddressFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param DataConfigurationInterface $dataConfiguration
     * @param GeoLiteCityCheckerInterface $geoLiteCityChecker
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $dataConfiguration, \PrestaShop\PrestaShop\Core\Geolocation\GeoLite\GeoLiteCityCheckerInterface $geoLiteCityChecker)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
