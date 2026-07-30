<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart;

/**
 * Used to identity which type of address has to be edited
 */
class CartAddressType
{
    public const DELIVERY_ADDRESS_TYPE = 'delivery_address';
    public const INVOICE_ADDRESS_TYPE = 'invoice_address';
}
