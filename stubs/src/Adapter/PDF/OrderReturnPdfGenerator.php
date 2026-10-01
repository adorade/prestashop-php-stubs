<?php

namespace PrestaShop\PrestaShop\Adapter\PDF;

/**
 * Wraps the legacy classes/pdf/HTMLTemplateOrderReturn + TCPDF stack so the Symfony controller
 * stays free of direct legacy calls (enforced by the phpstan-disallowed-calls ruleset).
 *
 * @internal
 */
final class OrderReturnPdfGenerator implements \PrestaShop\PrestaShop\Core\PDF\PDFGeneratorInterface
{
    /**
     * {@inheritdoc}
     *
     * @param array<int, int> $orderReturnIds exactly one id is supported
     *
     * @return string raw PDF bytes (TCPDF 'S' mode), suitable for a Symfony Response body
     */
    public function generatePDF(array $orderReturnIds): string
    {
    }
}
