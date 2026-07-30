<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Responsible for generating CreditSlip PDF
 */
final class CreditSlipPdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * @param string $dbPrefix
     * @param Connection $connection
     */
    public function __construct($dbPrefix, \Doctrine\DBAL\Connection $connection)
    {
    }
    /**
     * Generates PDF from given data using legacy object models
     *
     * @param CreditSlipId[] $creditSlipIds
     *
     * @throws PdfException
     */
    public function generatePDF(array $creditSlipIds)
    {
    }
}
