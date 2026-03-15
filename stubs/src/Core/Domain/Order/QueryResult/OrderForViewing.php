<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * Contains data about order for viewing
 */
class OrderForViewing
{
    /**
     * @param int $orderId
     * @param int $currencyId
     * @param int $carrierId
     * @param string $carrierName
     * @param int $shopId
     * @param string $reference
     * @param bool $isVirtual
     * @param string $taxMethod
     * @param bool $isTaxIncluded
     * @param bool $isValid
     * @param bool $hasBeenPaid
     * @param bool $hasInvoice
     * @param bool $isDelivered
     * @param bool $isShipped
     * @param bool $invoiceManagementIsEnabled
     * @param DateTimeImmutable $createdAt
     * @param OrderCustomerForViewing|null $customer
     * @param OrderShippingAddressForViewing $shippingAddress
     * @param OrderInvoiceAddressForViewing $invoiceAddress
     * @param OrderProductsForViewing $products
     * @param OrderHistoryForViewing $history
     * @param OrderDocumentsForViewing $documents
     * @param OrderShippingForViewing $shipping
     * @param OrderReturnsForViewing $returns
     * @param OrderPaymentsForViewing $payments
     * @param OrderMessagesForViewing $messages
     * @param OrderPricesForViewing $prices
     * @param OrderDiscountsForViewing $discounts
     * @param OrderSourcesForViewing $sources
     * @param LinkedOrdersForViewing $linkedOrders
     * @param string $shippingAddressFormatted
     * @param string $invoiceAddressFormatted
     * @param string $note
     */
    public function __construct(int $orderId, int $currencyId, int $carrierId, string $carrierName, int $shopId, string $reference, bool $isVirtual, string $taxMethod, bool $isTaxIncluded, bool $isValid, bool $hasBeenPaid, bool $hasInvoice, bool $isDelivered, bool $isShipped, bool $invoiceManagementIsEnabled, \DateTimeImmutable $createdAt, ?\PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderCustomerForViewing $customer, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingAddressForViewing $shippingAddress, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderInvoiceAddressForViewing $invoiceAddress, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductsForViewing $products, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderHistoryForViewing $history, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderDocumentsForViewing $documents, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingForViewing $shipping, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderReturnsForViewing $returns, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPaymentsForViewing $payments, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderMessagesForViewing $messages, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPricesForViewing $prices, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderDiscountsForViewing $discounts, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderSourcesForViewing $sources, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\LinkedOrdersForViewing $linkedOrders, string $shippingAddressFormatted = '', string $invoiceAddressFormatted = '', string $note = '')
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
    }
    /**
     * @return int
     */
    public function getCarrierId(): int
    {
    }
    public function getCarrierName(): string
    {
    }
    /**
     * @return int
     */
    public function getShopId(): int
    {
    }
    /**
     * @return string
     */
    public function getReference(): string
    {
    }
    /**
     * @return bool
     */
    public function isValid(): bool
    {
    }
    /**
     * @return OrderCustomerForViewing|null
     */
    public function getCustomer(): ?\PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderCustomerForViewing
    {
    }
    /**
     * @return OrderShippingAddressForViewing
     */
    public function getShippingAddress(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingAddressForViewing
    {
    }
    /**
     * @return OrderInvoiceAddressForViewing
     */
    public function getInvoiceAddress(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderInvoiceAddressForViewing
    {
    }
    /**
     * @return OrderProductsForViewing
     */
    public function getProducts(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderProductsForViewing
    {
    }
    /**
     * @return string
     */
    public function getTaxMethod(): string
    {
    }
    /**
     * @return OrderHistoryForViewing
     */
    public function getHistory(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderHistoryForViewing
    {
    }
    /**
     * @return OrderDocumentsForViewing
     */
    public function getDocuments(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderDocumentsForViewing
    {
    }
    /**
     * @return OrderShippingForViewing
     */
    public function getShipping(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderShippingForViewing
    {
    }
    /**
     * @return OrderReturnsForViewing
     */
    public function getReturns(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderReturnsForViewing
    {
    }
    /**
     * @return OrderPaymentsForViewing
     */
    public function getPayments(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPaymentsForViewing
    {
    }
    /**
     * @return bool
     */
    public function hasPayments(): bool
    {
    }
    /**
     * @return OrderMessagesForViewing
     */
    public function getMessages(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderMessagesForViewing
    {
    }
    /**
     * @return bool
     */
    public function isDelivered(): bool
    {
    }
    /**
     * @return bool
     */
    public function isShipped(): bool
    {
    }
    /**
     * @return OrderPricesForViewing
     */
    public function getPrices(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPricesForViewing
    {
    }
    /**
     * @return bool
     */
    public function isTaxIncluded(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasBeenPaid(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasInvoice(): bool
    {
    }
    /**
     * @return OrderDiscountsForViewing
     */
    public function getDiscounts(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderDiscountsForViewing
    {
    }
    /**
     * @return LinkedOrdersForViewing
     */
    public function getLinkedOrders(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\LinkedOrdersForViewing
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
    }
    /**
     * @return bool
     */
    public function isVirtual(): bool
    {
    }
    /**
     * @return bool
     */
    public function isInvoiceManagementIsEnabled(): bool
    {
    }
    /**
     * @return OrderSourcesForViewing
     */
    public function getSources(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderSourcesForViewing
    {
    }
    /**
     * @return bool
     */
    public function isRefundable(): bool
    {
    }
    /**
     * @return string
     */
    public function getShippingAddressFormatted(): string
    {
    }
    /**
     * @return string
     */
    public function getInvoiceAddressFormatted(): string
    {
    }
    /**
     * @return string
     */
    public function getNote(): string
    {
    }
}
