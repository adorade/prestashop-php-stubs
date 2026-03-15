<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order;

/**
 * There are different cancellation action types, they are listed in this class
 *
 * Class CancellationActionType
 */
class CancellationActionType
{
    public const CANCEL_PRODUCT = 0;
    public const STANDARD_REFUND = 1;
    public const PARTIAL_REFUND = 2;
    public const RETURN_PRODUCT = 3;
}
