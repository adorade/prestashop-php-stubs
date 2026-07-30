<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderProductForViewing implements \JsonSerializable
{
    public const TYPE_PACK = 'pack';
    public const TYPE_PRODUCT_WITH_COMBINATIONS = 'product_with_combinations';
    public const TYPE_PRODUCT_WITHOUT_COMBINATIONS = 'product_without_combinations';
    /**
     * @param int $orderDetailId
     * @param int $id
     * @param int $combinationId
     * @param string $name
     * @param string $reference
     * @param string $supplierReference
     * @param int $quantity
     * @param string $unitPrice
     * @param string $totalPrice
     * @param int $availableQuantity
     * @param string|null $imagePath
     * @param string $unitPriceTaxExclRaw
     * @param string $unitPriceTaxInclRaw
     * @param string $taxRate
     * @param string $amountRefunded
     * @param int $quantityRefunded
     * @param string $amountRefundable
     * @param string $amountRefundableRaw
     * @param string $location
     * @param int|null $orderInvoiceId
     * @param string $orderInvoiceNumber
     * @param string $type
     * @param bool $availableOutOfStock
     * @param array $packItems
     * @param OrderProductCustomizationsForViewing|null $customizations
     */
    public function __construct(?int $orderDetailId, int $id, int $combinationId, string $name, string $reference, string $supplierReference, int $quantity, string $unitPrice, string $totalPrice, int $availableQuantity, ?string $imagePath, string $unitPriceTaxExclRaw, string $unitPriceTaxInclRaw, string $taxRate, string $amountRefunded, int $quantityRefunded, string $amountRefundable, string $amountRefundableRaw, string $location, ?int $orderInvoiceId, string $orderInvoiceNumber, string $type, bool $availableOutOfStock, array $packItems = [], ?\PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductCustomizationsForViewing $customizations = null)
    {
    }
    /**
     * Get product's order detail ID
     *
     * @return int|null
     */
    public function getOrderDetailId(): ?int
    {
    }
    /**
     * Get product ID
     *
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return int
     */
    public function getCombinationId(): int
    {
    }
    /**
     * Get product's name
     *
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return OrderProductForViewing[]
     */
    public function getPackItems(): array
    {
    }
    /**
     * Product reference
     *
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * Get product's supplier reference
     *
     * @return string
     */
    public function getSupplierReference(): string
    {
    }
    /**
     * get tax rate to be applied on this product
     *
     * @return string
     */
    public function getTaxRate(): string
    {
    }
    /**
     * @return string
     */
    public function getType(): string
    {
    }
    /**
     * Get product's location
     *
     * @return string
     */
    public function getLocation(): string
    {
    }
    /**
     * Get product's quantity
     *
     * @return int
     */
    public function getQuantity(): int
    {
    }
    /**
     * Get product's unit price
     *
     * @return string
     */
    public function getUnitPrice(): string
    {
    }
    /**
     * Get product's formatted total price
     *
     * @return string
     */
    public function getTotalPrice(): string
    {
    }
    /**
     * Get available quantity for this product
     *
     * @return int
     */
    public function getAvailableQuantity(): int
    {
    }
    /**
     * Get image path for this product
     *
     * @return string|null
     */
    public function getImagePath(): ?string
    {
    }
    /**
     * Get unit price without taxes
     *
     * @return string
     */
    public function getUnitPriceTaxExclRaw(): string
    {
    }
    /**
     * Get unit price including taxes
     *
     * @return string
     */
    public function getUnitPriceTaxInclRaw(): string
    {
    }
    /**
     * How much (money) has already been refunded for this product
     *
     * @return string
     */
    public function getAmountRefunded(): string
    {
    }
    /**
     * How many (quantity) of this product has already been refunded
     *
     * @return int
     */
    public function getQuantityRefunded(): int
    {
    }
    /**
     * How much (money) can be refunded for this product (formatted for display)
     *
     * @return string
     */
    public function getAmountRefundable(): string
    {
    }
    /**
     * How much (money) can be refunded for this product
     *
     * @return string
     */
    public function getAmountRefundableRaw(): string
    {
    }
    /**
     * How many (quantity) of this product can be refunded
     *
     * @return int
     */
    public function getQuantityRefundable(): int
    {
    }
    /**
     * Can this product be refunded
     *
     * @return bool
     */
    public function isRefundable(): bool
    {
    }
    /**
     * Get the id of this product's invoice
     *
     * @return int
     */
    public function getOrderInvoiceId(): ?int
    {
    }
    /**
     * Get the number (reference) of this product's invoice
     *
     * @return string
     */
    public function getOrderInvoiceNumber(): string
    {
    }
    /**
     * Get customizations of this product
     *
     * @return OrderProductCustomizationsForViewing|null
     */
    public function getCustomizations(): ?\PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductCustomizationsForViewing
    {
    }
    /**
     * @return bool
     */
    public function isAvailableOutOfStock(): bool
    {
    }
    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
    }
}
