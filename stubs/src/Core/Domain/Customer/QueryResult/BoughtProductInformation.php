<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class BoughtProductInformation holds information about product that customer has bought.
 */
class BoughtProductInformation
{
    /**
     * @param int $orderId
     * @param string $boughtDate
     * @param string $productName
     * @param int $boughtQuantity
     */
    public function __construct($orderId, $boughtDate, $productName, $boughtQuantity)
    {
    }
    /**
     * @return int
     */
    public function getOrderId()
    {
    }
    /**
     * @return string
     */
    public function getBoughtDate()
    {
    }
    /**
     * @return string
     */
    public function getProductName()
    {
    }
    /**
     * @return int
     */
    public function getBoughtQuantity()
    {
    }
}
