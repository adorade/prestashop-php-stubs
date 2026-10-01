<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

/**
 * DTO for order preview data
 */
class OrderPreview
{
    /**
     * @param OrderPreviewInvoiceDetails $invoiceDetails
     * @param OrderPreviewShippingDetails $shippingDetails
     * @param array $productDetails
     * @param bool $isVirtual
     * @param bool $taxIncluded
     * @param string $invoiceAddressFormatted
     * @param string $shippingAddressFormatted
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreviewInvoiceDetails $invoiceDetails, \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreviewShippingDetails $shippingDetails, array $productDetails, bool $isVirtual, bool $taxIncluded, string $invoiceAddressFormatted = '', string $shippingAddressFormatted = '')
    {
    }
    /**
     * @return OrderPreviewInvoiceDetails
     */
    public function getInvoiceDetails(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreviewInvoiceDetails
    {
    }
    /**
     * @return OrderPreviewShippingDetails
     */
    public function getShippingDetails(): \PrestaShop\PrestaShop\Core\Domain\Order\QueryResult\OrderPreviewShippingDetails
    {
    }
    /**
     * @return OrderPreviewProductDetail[]
     */
    public function getProductDetails(): array
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
    public function isVirtual(): bool
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
    public function getShippingAddressFormatted(): string
    {
    }
}
