<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Sets internal note about order that can only be seen in Back Office.
 */
class SetInternalOrderNoteCommand
{
    /**
     * @param int $orderId
     * @param string $internalNote
     */
    public function __construct($orderId, $internalNote)
    {
    }
    /**
     * @return OrderId
     */
    public function getOrderId()
    {
    }
    /**
     * @return string
     */
    public function getInternalNote()
    {
    }
}
