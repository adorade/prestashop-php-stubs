<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderDiscountForViewing
{
    public function __construct(int $orderCartRuleId, string $name, \PrestaShop\Decimal\DecimalNumber $amountRaw, string $amountFormatted)
    {
    }
    /**
     * @return int
     */
    public function getOrderCartRuleId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getAmountFormatted(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getAmountRaw(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
