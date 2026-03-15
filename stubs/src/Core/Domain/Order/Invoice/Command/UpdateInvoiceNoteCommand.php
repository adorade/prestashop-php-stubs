<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Invoice\Command;

/**
 * Adds note for given invoice.
 */
class UpdateInvoiceNoteCommand
{
    /**
     * @param int $orderInvoiceId
     * @param string|null $note
     */
    public function __construct(int $orderInvoiceId, ?string $note)
    {
    }
    /**
     * @return OrderInvoiceId
     */
    public function getOrderInvoiceId(): \PrestaShop\PrestaShop\Core\Domain\Order\Invoice\ValueObject\OrderInvoiceId
    {
    }
    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
    }
}
