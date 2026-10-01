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
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \Image[]
     */
    public function getImages(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId[]
     */
    public function getImageIds(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId|null
     */
    public function getDefaultImageId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId|null
     */
    public function findCoverId(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
    /**
     * Retrieves a list of image ids ordered by position for each provided combination id
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[] $combinationIds
     *
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId[]> [(int) id_combination => [ImageId]]
     */
    public function getImageIdsForCombinations(array $combinationIds): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     *
     * @return \Image
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId): \Image
    {
    }
    public function getByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): \Image
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getAssociatedShopIds(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
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
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $sourceImageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $newProductId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return \Image|null
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function duplicate(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $sourceImageId, \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $newProductId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): ?\Image
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     *
     * @return void
     */
    public function deleteFromShops(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, array $shopIds): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @return void
     */
    public function deleteByShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[]
     */
    public function getShopIdsByCoverId(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): array
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\QueryResult\Shop\ShopProductImagesCollection
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
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId[] $shopIds
     */
    public function partialUpdateForShops(\Image $image, array $updatableProperties, array $shopIds, int $errorCode = 0): void
    {
    }
    public function delete(\Image $image): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId
     *
     * @return \Image
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function getImageById(\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId $imageId): \Image
    {
    }
    /**
     * @return \ImageType[]
     */
    public function getProductImageTypes(): array
    {
    }
    public function getPreviewCombinationProduct(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId): ?\PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId
    {
    }
}
