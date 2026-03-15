<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Product\Command;

/**
 * Adds product to an existing order.
 */
class AddProductToOrderCommand
{
    /**
     * Add product to an order with new invoice. It applies to orders that were already paid and waiting for payment.
     *
     * @param int $orderId
     * @param int $productId
     * @param int $combinationId
     * @param string $productPriceTaxIncluded
     * @param string $productPriceTaxExcluded
     * @param int $productQuantity
     * @param bool|null $hasFreeShipping
     *
     * @return self
     *
     * @throws InvalidProductQuantityException
     * @throws InvalidAmountException
     * @throws OrderException
     */
    public static function withNewInvoice(int $orderId, int $productId, int $combinationId, string $productPriceTaxIncluded, string $productPriceTaxExcluded, int $productQuantity, ?bool $hasFreeShipping = null)
    {
    }
    /**
     * Add product to an order using existing invoice. It applies only for orders that were not yet paid.
     *
     * @param int $orderId
     * @param int $orderInvoiceId
     * @param int $productId
     * @param int $combinationId
     * @param string $productPriceTaxIncluded
     * @param string $productPriceTaxExcluded
     * @param int $productQuantity
     *
     * @return self
     *
     * @throws InvalidProductQuantityException
     * @throws InvalidAmountException
     * @throws OrderException
     */
    public static function toExistingInvoice(int $orderId, int $orderInvoiceId, int $productId, int $combinationId, string $productPriceTaxIncluded, string $productPriceTaxExcluded, int $productQuantity)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return CombinationId|null
     */
    public function getCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getProductPriceTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getProductPriceTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return int
     */
    public function getProductQuantity(): int
    {
    }
    /**
     * @return int|null
     */
    public function getOrderInvoiceId(): ?int
    {
    }
    /**
     * @return bool|null
     */
    public function hasFreeShipping(): ?bool
    {
    }
}
