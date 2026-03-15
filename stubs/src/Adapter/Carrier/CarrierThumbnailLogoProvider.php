<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier;

/**
 * Provides path for Carrier logo in carriers grid
 */
class CarrierThumbnailLogoProvider implements \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface
{
    /**
     * @param ImageTagSourceParserInterface $parser
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $parser)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPath($carrierId)
    {
    }
}
