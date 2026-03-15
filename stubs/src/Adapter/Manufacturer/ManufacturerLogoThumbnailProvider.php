<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer;

/**
 * Provides path for manufacturer logo thumbnail
 */
final class ManufacturerLogoThumbnailProvider implements \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface
{
    /**
     * @param ImageTagSourceParserInterface $imageTagSourceParser
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPath($manufacturerId)
    {
    }
}
