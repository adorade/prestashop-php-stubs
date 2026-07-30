<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class SupplierGridDataFactory gets data for supplier grid.
 */
final class SupplierGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $supplierDataFactory
     * @param ImageProviderInterface $supplierLogoImageProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $supplierDataFactory, \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $supplierLogoImageProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
