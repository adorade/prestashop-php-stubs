<?php

namespace PrestaShopBundle\Form\Admin\Improve\International\Geolocation;

/**
 * Class GeolocationFormDataProvider is responsible for handling geolocation form data.
 *
 * @deprecated since 1.7.8, will be removed in the next major version
 */
final class GeolocationFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param DataConfigurationInterface $geolocationByIpAddressConfiguration
     * @param DataConfigurationInterface $geolocationIpAddressWhitelistConfiguration
     * @param DataConfigurationInterface $geolocationOptionsConfiguration
     * @param GeoLiteCityCheckerInterface $geoLiteCityChecker
     * @param ValidatorInterface $validator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $geolocationByIpAddressConfiguration, \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $geolocationIpAddressWhitelistConfiguration, \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $geolocationOptionsConfiguration, \PrestaShop\PrestaShop\Core\Geolocation\GeoLite\GeoLiteCityCheckerInterface $geoLiteCityChecker, \PrestaShop\PrestaShop\Core\Validation\ValidatorInterface $validator)
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
