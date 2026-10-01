<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order;

/**
 * Used to identity which type of address has to be edited
 */
class OrderAddressType
{
    public const DELIVERY_ADDRESS_TYPE = 'delivery_address';
    public const INVOICE_ADDRESS_TYPE = 'invoice_address';
}
