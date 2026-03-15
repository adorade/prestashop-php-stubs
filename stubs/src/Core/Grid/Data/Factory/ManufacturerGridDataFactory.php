<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Gets data for manufacturer grid
 */
final class ManufacturerGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $manufacturerDataFactory
     * @param ImageProviderInterface $manufacturerLogoThumbnailProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $manufacturerDataFactory, \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $manufacturerLogoThumbnailProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
