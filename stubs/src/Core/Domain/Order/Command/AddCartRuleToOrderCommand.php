<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Adds cart rule to given order.
 */
class AddCartRuleToOrderCommand
{
    /**
     * @param int $orderId
     * @param string $cartRuleName
     * @param string $cartRuleType
     * @param string|null $value
     * @param int|null $orderInvoiceId
     */
    public function __construct(int $orderId, string $cartRuleName, string $cartRuleType, ?string $value, $orderInvoiceId = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
     */
    public function getOrderId(): \PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
    /**
     * @return string
     */
    public function getCartRuleName(): string
    {
    }
    /**
     * @return string
     */
    public function getCartRuleType(): string
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber|null
     */
    public function getDiscountValue(): ?\PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Order\Invoice\ValueObject\OrderInvoiceId|null
     */
    public function getOrderInvoiceId(): ?\PrestaShop\PrestaShop\Core\Domain\Order\Invoice\ValueObject\OrderInvoiceId
    {
    }
}
