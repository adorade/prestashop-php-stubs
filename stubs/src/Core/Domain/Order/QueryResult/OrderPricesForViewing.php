<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderPricesForViewing
{
    public function __construct(\PrestaShop\Decimal\DecimalNumber $productsPriceRaw, \PrestaShop\Decimal\DecimalNumber $discountsAmountRaw, \PrestaShop\Decimal\DecimalNumber $wrappingPriceRaw, \PrestaShop\Decimal\DecimalNumber $shippingPriceRaw, \PrestaShop\Decimal\DecimalNumber $shippingRefundableAmountRaw, \PrestaShop\Decimal\DecimalNumber $taxesAmountRaw, \PrestaShop\Decimal\DecimalNumber $totalAmountRaw, string $productsPrice, string $discountsAmount, string $wrappingPrice, string $shippingPrice, string $shippingRefundableAmount, string $taxesAmount, string $totalAmount)
    {
    }
    /**
     * @return string
     */
    public function getProductsPriceFormatted(): string
    {
    }
    /**
     * @return string
     */
    public function getDiscountsAmountFormatted(): ?string
    {
    }
    /**
     * @return string
     */
    public function getWrappingPriceFormatted(): ?string
    {
    }
    /**
     * @return string
     */
    public function getShippingPriceFormatted(): ?string
    {
    }
    /**
     * @return string
     */
    public function getShippingRefundableAmountFormatted(): ?string
    {
    }
    /**
     * @return string
     */
    public function getTaxesAmountFormatted(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalAmountFormatted(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getProductsPriceRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getDiscountsAmountRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getWrappingPriceRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getShippingPriceRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getShippingRefundableAmountRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getTaxesAmountRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getTotalAmountRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
