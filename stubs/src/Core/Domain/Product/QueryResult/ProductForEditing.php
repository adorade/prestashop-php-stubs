<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Product information for editing
 */
class ProductForEditing
{
    /**
     * @param int $productId
     * @param string $type
     * @param bool $isActive
     * @param ProductCustomizationOptions $customizationOptions
     * @param ProductBasicInformation $basicInformation
     * @param CategoriesInformation $categoriesInformation
     * @param ProductPricesInformation $pricesInformation
     * @param ProductOptions $options
     * @param ProductDetails $details
     * @param ProductShippingInformation $shippingInformation
     * @param ProductSeoOptions $productSeoOptions
     * @param AttachmentInformation[] $associatedAttachments
     * @param ProductStockInformation $stockInformation
     * @param VirtualProductFileForEditing|null $virtualProductFile
     * @param string $coverThumbnailUrl
     */
    public function __construct(int $productId, string $type, bool $isActive, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductCustomizationOptions $customizationOptions, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductBasicInformation $basicInformation, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\CategoriesInformation $categoriesInformation, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductPricesInformation $pricesInformation, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductOptions $options, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductDetails $details, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductShippingInformation $shippingInformation, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductSeoOptions $productSeoOptions, array $associatedAttachments, \PrestaShop\PrestaShop\Core\Domain\Product\QueryResult\ProductStockInformation $stockInformation, ?\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\QueryResult\VirtualProductFileForEditing $virtualProductFile, string $coverThumbnailUrl)
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
     * @return AttachmentInformation[]
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
     * @return VirtualProductFileForEditing|null
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
}
