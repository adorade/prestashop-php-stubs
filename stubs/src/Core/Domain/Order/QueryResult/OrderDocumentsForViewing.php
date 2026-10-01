<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderDocumentsForViewing
{
    /**
     * @param bool $canGenerateInvoice
     * @param bool $canGenerateDeliverySlip
     * @param OrderDocumentForViewing[] $documents
     */
    public function __construct(bool $canGenerateInvoice, bool $canGenerateDeliverySlip, array $documents)
    {
    }
    /**
     * @return OrderDocumentForViewing[]
     */
    public function getDocuments(): array
    {
    }
    /**
     * @return bool
     */
    public function canGenerateInvoice(): bool
    {
    }
    /**
     * @return bool
     */
    public function canGenerateDeliverySlip(): bool
    {
    }
}
