<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class TitleGridDataFactory gets data for title grid.
 */
class TitleGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $doctrineTitleDataFactory
     * @param TranslatorInterface $translator
     * @param ImageProviderInterface $titleImageThumbnailProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $doctrineTitleDataFactory, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface $titleImageThumbnailProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
