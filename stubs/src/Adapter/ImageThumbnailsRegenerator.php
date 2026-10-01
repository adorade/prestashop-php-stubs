<?php

namespace PrestaShop\PrestaShop\Adapter;

/**
 * Class responsible for regenerating images by image type.
 */
class ImageThumbnailsRegenerator
{
    public function __construct(
        private readonly \PrestaShop\PrestaShop\Adapter\Product\Image\Repository\ProductImageRepository $productImageRepository,
        private readonly \PrestaShop\PrestaShop\Core\Image\ImageFormatConfiguration $imageFormatConfiguration,
        private readonly \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository,
        private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration,
        private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire('@prestashop.adapter.product.image.product_image_filesystem_path_factory')]
        private readonly \PrestaShop\PrestaShop\Adapter\Product\Image\ProductImagePathFactory $productImagePathFactory
    )
    {
    }
    /**
     * Delete previous resized images.
     *
     * @param string $dir
     * @param array $types
     * @param bool $isProduct
     *
     * @return bool
     */
    public function deletePreviousImages(string $dir, array $types, bool $isProduct = false): bool
    {
    }
    /**
     * Regenerate images.
     *
     * @param string $dir
     * @param array $type
     * @param bool $productsImages
     *
     * @return bool|array
     */
    public function regenerateNewImages(string $dir, array $type, bool $productsImages = false): bool|array
    {
    }
    /* Hook watermark optimization */
    public function regenerateWatermark(string $dir, ?array $formats = null): bool|string
    {
    }
    /**
     * Regenerate no-pictures images.
     *
     * @param string $dir
     * @param array $type
     * @param array $languages
     *
     * @return bool
     */
    public function regenerateNoPictureImages(string $dir, array $type, array $languages): bool
    {
    }
    /**
     * Function aim to delete all images from defined image type
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeException
     */
    public function deleteImagesFromType($imageTypeName, $path): void
    {
    }
}
