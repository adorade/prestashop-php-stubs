<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Gets data for carrier grid
 */
class CarrierGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $carrierDataFactory
     * @param \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $carrierLogoProvider
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $carrierDataFactory, \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $carrierLogoProvider, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
