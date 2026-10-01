<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Generates invoice by invoice ID.
 */
final class InvoicePdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generatePDF(array $invoiceId): void
    {
    }
    public function generatePDFForResponse(array $invoiceId): \PrestaShop\PrestaShop\Core\PDF\GeneratedPdf
    {
    }
}
