<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderReturnsForViewing
{
    /**
     * @param OrderReturnForViewing[] $orderReturns
     */
    public function __construct(array $orderReturns = [])
    {
    }
    /**
     * @return OrderReturnForViewing[]
     */
    public function getOrderReturns(): array
    {
    }
}
