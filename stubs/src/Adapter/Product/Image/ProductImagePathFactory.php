<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image;

class ProductImagePathFactory
{
    public const IMAGE_TYPE_SMALL_DEFAULT = 'small_default';
    public const IMAGE_TYPE_MEDIUM_DEFAULT = 'medium_default';
    public const IMAGE_TYPE_LARGE_DEFAULT = 'large_default';
    public const IMAGE_TYPE_HOME_DEFAULT = 'home_default';
    public const IMAGE_TYPE_CART_DEFAULT = 'cart_default';
    public const DEFAULT_IMAGE_FORMAT = 'jpg';
    /**
     * @param string $pathToBaseDir
     * @param string $temporaryImgDir
     * @param string $contextLangIsoCode
     */
    public function __construct(string $pathToBaseDir, string $temporaryImgDir, string $contextLangIsoCode)
    {
    }
    /**
     * @param ImageId $imageId
     * @param string $extension
     *
     * @return string
     */
    public function getPath(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, string $extension = self::DEFAULT_IMAGE_FORMAT): string
    {
    }
    /**
     * @param ImageId $imageId
     * @param string $type
     * @param string $extension
     *
     * @return string
     */
    public function getPathByType(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, string $type, string $extension = self::DEFAULT_IMAGE_FORMAT): string
    {
    }
    /**
     * @param string $type
     * @param string|null $langIso if null, will use $contextLangIsoCode by default
     *
     * @return string
     */
    public function getNoImagePath(string $type, ?string $langIso = null): string
    {
    }
    /**
     * @param int $productId
     *
     * @return string
     */
    public function getCachedCover(int $productId): string
    {
    }
    /**
     * @param int $productId
     * @param int $shopId
     *
     * @return string
     */
    public function getHelperThumbnail(int $productId, int $shopId): string
    {
    }
    /**
     * @param ImageId $imageId
     *
     * @return string
     */
    public function getImageFolder(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): string
    {
    }
}
