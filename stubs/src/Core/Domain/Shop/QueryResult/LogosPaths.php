<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\QueryResult;

/**
 * Holds data of header, email, invoice and favicon logos paths
 */
class LogosPaths
{
    /**
     * @param string $headerLogoPath
     * @param string $mailLogoPath
     * @param string $invoiceLogoPath
     * @param string $faviconPath
     */
    public function __construct($headerLogoPath, $mailLogoPath, $invoiceLogoPath, $faviconPath)
    {
    }
    /**
     * @return string
     */
    public function getHeaderLogoPath()
    {
    }
    /**
     * @return string
     */
    public function getMailLogoPath()
    {
    }
    /**
     * @return string
     */
    public function getInvoiceLogoPath()
    {
    }
    /**
     * @return string
     */
    public function getFaviconPath()
    {
    }
}
