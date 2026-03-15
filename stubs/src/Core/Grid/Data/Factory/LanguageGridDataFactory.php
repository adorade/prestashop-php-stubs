<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class LanguageGridDataFactory gets data for languages grid.
 */
final class LanguageGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $doctrineLanguageDataFactory
     * @param ImageProviderInterface $languageFlagThumbnailProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $doctrineLanguageDataFactory, \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $languageFlagThumbnailProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
