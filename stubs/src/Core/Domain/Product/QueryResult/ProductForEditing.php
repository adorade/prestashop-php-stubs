<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Product information for editing
 */
class ProductForEditing
{
    public function __construct(private int $productId, private string $type, private bool $isActive, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductCustomizationOptions $customizationOptions, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductBasicInformation $basicInformation, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\CategoriesInformation $categoriesInformation, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductPricesInformation $pricesInformation, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductOptions $options, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductDetails $details, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductShippingInformation $shippingInformation, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductSeoOptions $productSeoOptions, private array $associatedAttachments, private \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductStockInformation $stockInformation, private ?\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\QueryResult\VirtualProductFileForEditing $virtualProductFile, private string $coverThumbnailUrl, private array $shopIds)
    {
    }
    /**
     * @return int
     */
    public function getProductId(): int
    {
    }
    /**
     * @return string
     */
    public function getType(): string
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
    /**
     * @return ProductCustomizationOptions
     */
    public function getCustomizationOptions(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductCustomizationOptions
    {
    }
    /**
     * @return ProductBasicInformation
     */
    public function getBasicInformation(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductBasicInformation
    {
    }
    /**
     * @return CategoriesInformation
     */
    public function getCategoriesInformation(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\CategoriesInformation
    {
    }
    /**
     * @return ProductPricesInformation
     */
    public function getPricesInformation(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductPricesInformation
    {
    }
    /**
     * @return ProductOptions
     */
    public function getOptions(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductOptions
    {
    }
    /**
     * @return ProductDetails
     */
    public function getDetails(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductDetails
    {
    }
    /**
     * @return ProductShippingInformation
     */
    public function getShippingInformation(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductShippingInformation
    {
    }
    /**
     * @return ProductSeoOptions
     */
    public function getProductSeoOptions(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductSeoOptions
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Attachment\QueryResult\AttachmentInformation[]
     */
    public function getAssociatedAttachments(): array
    {
    }
    /**
     * @return ProductStockInformation
     */
    public function getStockInformation(): \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductStockInformation
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\QueryResult\VirtualProductFileForEditing|null
     */
    public function getVirtualProductFile(): ?\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\QueryResult\VirtualProductFileForEditing
    {
    }
    /**
     * @return string
     */
    public function getCoverThumbnailUrl(): string
    {
    }
    /**
     * @return int[]
     */
    public function getShopIds(): array
    {
    }
}
