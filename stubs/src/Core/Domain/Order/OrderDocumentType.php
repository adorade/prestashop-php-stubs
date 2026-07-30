<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order;

/**
 * Used to identity which type of document the orders has
 */
class OrderDocumentType
{
    public const CREDIT_SLIP = 'credit_slip';
    public const DELIVERY_SLIP = 'delivery_slip';
    public const INVOICE = 'invoice';
}
