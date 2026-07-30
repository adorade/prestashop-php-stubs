<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Class PDFManager responsible for PDF generation using legacy code.
 */
final class PDFGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * @param Smarty $smarty
     * @param PDFTemplateTypeProviderInterface $templateTypeProvider
     */
    public function __construct(\Smarty $smarty, \PrestaShop\PrestaShop\Core\PDF\PDFTemplateTypeProviderInterface $templateTypeProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function generatePDF(array $objectCollection)
    {
    }
}
