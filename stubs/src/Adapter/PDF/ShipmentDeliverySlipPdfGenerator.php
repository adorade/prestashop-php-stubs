<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Generates delivery slip for given shipment(s)
 *
 * @internal
 */
final class ShipmentDeliverySlipPdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShopBundle\Entity\Repository\ShipmentRepository $shipmentRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function generatePDF(array $shipmentIds): string
    {
    }
}
