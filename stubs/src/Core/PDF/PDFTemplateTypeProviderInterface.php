<?php

namespace PrestaShop\PrestaShop\Core\PDF;

/**
 * Interface PDFDataProviderInterface describes a PDF template type provider.
 */
interface PDFTemplateTypeProviderInterface
{
    /**
     * Gets PDF template type.
     *
     * @return string
     */
    public function getPDFTemplateType();
}
