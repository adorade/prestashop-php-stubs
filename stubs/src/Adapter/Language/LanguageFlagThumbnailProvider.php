<?php

namespace PrestaShop\PrestaShop\Adapter\Language;

/**
 * Class LanguageThumbnailProvider provides path to language's flag thumbnail.
 */
final class LanguageFlagThumbnailProvider implements \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface
{
    /**
     * @param ImageTagSourceParserInterface $imageTagSourceParser
     * @param int $contextShopId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, $contextShopId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPath($languageId)
    {
    }
}
