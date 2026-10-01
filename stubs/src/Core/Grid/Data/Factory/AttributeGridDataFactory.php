<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Decorates database records for grid presentation
 */
final class AttributeGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $attributeDataFactory
     */
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $attributeDataFactory, private readonly \PrestaShop\PrestaShop\Adapter\Shop\Url\ImageFolderProvider $imageFolderProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
