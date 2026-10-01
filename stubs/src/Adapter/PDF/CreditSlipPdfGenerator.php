<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Responsible for generating CreditSlip PDF
 */
final class CreditSlipPdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * @param string $dbPrefix
     * @param \Doctrine\DBAL\Connection $connection
     */
    public function __construct($dbPrefix, \Doctrine\DBAL\Connection $connection)
    {
    }
    /**
     * Generates PDF from given data using legacy object models
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\CreditSlip\ValueObject\CreditSlipId[] $creditSlipIds
     *
     * @throws \PrestaShop\PrestaShop\Core\PDF\Exception\PdfException
     */
    public function generatePDF(array $creditSlipIds): string
    {
    }
    public function generatePDFForResponse(array $creditSlipIds): \PrestaShop\PrestaShop\Core\PDF\GeneratedPdf
    {
    }
}
