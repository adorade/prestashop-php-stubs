<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Image\Repository;

/**
 * Provides access to product Image data source with shop context
 */
class ProductImageRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    public function __construct(\Doctrine\DBAL\Connection $connection, string $dbPrefix, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Image\Validate\ProductImageValidator $productImageValidator)
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return Image[]
     */
    public function getImages(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopConstraint $shopConstraint
     *
     * @return ImageId[]
     */
    public function getImageIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return ImageId|null
     */
    public function getDefaultImageId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    /**
     * @param ProductId $productId
     * @param ShopId $shopId
     *
     * @return ImageId|null
     */
    public function findCoverId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    /**
     * Retrieves a list of image ids ordered by position for each provided combination id
     *
     * @param CombinationId[] $combinationIds
     *
     * @return array<int, ImageId[]> [(int) id_combination => [ImageId]]
     */
    public function getImageIdsForCombinations(array $combinationIds): array
    {
    }
    /**
     * @param ImageId $imageId
     *
     * @return Image
     *
     * @throws CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Image
    {
    }
    public function getByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Image
    {
    }
    /**
     * @param ImageId $imageId
     *
     * @return ShopId[]
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): array
    {
    }
    /**
     * @param ImageId $imageId
     * @param ShopConstraint $shopConstraint
     *
     * @return ShopId[]
     */
    public function getAssociatedShopIdsByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    public function create(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Image
    {
    }
    /**
     * Duplicate an image and associates it to another product, the same shop association are kept based on
     * specified shop constraint. Unles the image is associated to no shops matching the shop constraint, in
     * which case no duplication is done and null is returned.
     *
     * @param ImageId $sourceImageId
     * @param ProductId $newProductId
     * @param ShopConstraint $shopConstraint
     *
     * @return Image|null
     *
     * @throws CoreException
     */
    public function duplicate(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $sourceImageId, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $newProductId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): ?\Image
    {
    }
    /**
     * @param ImageId $imageId
     * @param ShopId[] $shopIds
     *
     * @return void
     */
    public function deleteFromShops(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, array $shopIds): void
    {
    }
    /**
     * @param ImageId $imageId
     * @param ShopConstraint $shopConstraint
     *
     * @return void
     */
    public function deleteByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param ImageId $imageId
     *
     * @return ShopId[]
     */
    public function getShopIdsByCoverId(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): array
    {
    }
    /**
     * @param ProductId $productId
     *
     * @return ShopProductImagesCollection
     */
    public function getImagesFromAllShop(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopProductImagesCollection
    {
    }
    public function findCoverImageId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    public function findCoverImageIdGlobal(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    public function associateImageToShop(\Image $image, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): void
    {
    }
    public function updateMissingCovers(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId): void
    {
    }
    /**
     * @param array<int|string, string|int[]> $updatableProperties
     * @param ShopId[] $shopIds
     */
    public function partialUpdateForShops(\Image $image, array $updatableProperties, array $shopIds, int $errorCode = 0): void
    {
    }
    public function delete(\Image $image): void
    {
    }
    /**
     * @param ImageId $imageId
     *
     * @return Image
     *
     * @throws CoreException
     */
    public function getImageById(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): \Image
    {
    }
    /**
     * @return ImageType[]
     */
    public function getProductImageTypes(): array
    {
    }
    public function getPreviewCombinationProduct(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
}
