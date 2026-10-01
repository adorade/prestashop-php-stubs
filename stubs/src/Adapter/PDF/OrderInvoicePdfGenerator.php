<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Generates invoice for given order.
 */
final class OrderInvoicePdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function generatePDF(array $orderId)
    {
    }
}
