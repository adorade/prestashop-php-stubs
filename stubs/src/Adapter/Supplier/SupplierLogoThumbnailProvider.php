<?php

namespace PrestaShop\PrestaShop\Adapter\Supplier;

/**
 * Class SupplierLogoThumbnailProvider is responsible for providing thumbnail path for supplier logo image.
 */
final class SupplierLogoThumbnailProvider implements \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser
     * @param \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPath($supplierId)
    {
    }
}
