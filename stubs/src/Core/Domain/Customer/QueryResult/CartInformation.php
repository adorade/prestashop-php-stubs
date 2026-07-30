<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerCartInformation.
 */
class CartInformation
{
    /**
     * @param string $cartId
     * @param string $cartCreationDate
     * @param string $cartTotal
     * @param string $carrierName
     */
    public function __construct($cartId, $cartCreationDate, $cartTotal, $carrierName)
    {
    }
    /**
     * @return string
     */
    public function getCartId()
    {
    }
    /**
     * @return string
     */
    public function getCartCreationDate()
    {
    }
    /**
     * @return string
     */
    public function getCartTotal()
    {
    }
    /**
     * @return string
     */
    public function getCarrierName()
    {
    }
}
