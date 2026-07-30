<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Generates delivery slip for given order
 *
 * @internal
 */
final class DeliverySlipPdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * @param TranslatorInterface $translator
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
