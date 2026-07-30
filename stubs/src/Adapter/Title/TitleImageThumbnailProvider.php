<?php

namespace PrestaShop\PrestaShop\Adapter\Title;

/**
 * Class TitleImageThumbnailProvider provides path to title's image thumbnail and generate it.
 */
class TitleImageThumbnailProvider implements \PrestaShop\PrestaShop\Core\Image\ImageProviderInterface
{
    /**
     * @param ImageTagSourceParserInterface $imageTagSourceParser
     * @param ImageManager $imageManager
     * @param string $genderImageDirectoryName
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Image\Parser\ImageTagSourceParserInterface $imageTagSourceParser, \PrestaShop\PrestaShop\Adapter\ImageManager $imageManager, string $genderImageDirectoryName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getPath($titleId): ?string
    {
    }
}
