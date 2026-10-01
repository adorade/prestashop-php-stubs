<?php

/**
 * @since 1.5
 */
class HTMLTemplateInvoiceCore extends \HTMLTemplate
{
    /**
     * @var Order
     */
    public $order;
    /**
     * @var OrderInvoice
     */
    public $order_invoice;
    /**
     * @var bool
     */
    public $available_in_your_account = \false;
    /**
     * @param OrderInvoice $order_invoice
     * @param Smarty $smarty
     * @param bool $bulk_mode
     *
     * @throws PrestaShopException
     */
    public function __construct(\OrderInvoice $order_invoice, \Smarty $smarty, $bulk_mode = \false)
    {
    }
    /**
     * Returns the template's HTML header.
     *
     * @return string HTML header
     */
    public function getHeader()
    {
    }
    /**
     * Compute layout elements size.
     *
     * @param array $params Layout elements
     *
     * @return array Layout elements columns size
     */
    protected function computeLayout(array $params)
    {
    }
    /**
     * Returns the template's HTML content.
     *
     * @return string HTML content
     */
    public function getContent()
    {
    }
    /**
     * Returns the tax tab content.
     *
     * @return string|array Tax tab html content (Returns an array if debug params used in request)
     */
    public function getTaxTabContent()
    {
    }
    /**
     * Returns different tax breakdown elements.
     *
     * @return array|bool Different tax breakdown elements
     */
    protected function getTaxBreakdown()
    {
    }
    /**
     * Returns the invoice template associated to the country iso_code.
     *
     * @param string $iso_country
     *
     * @return string
     */
    protected function getTemplateByCountry($iso_country)
    {
    }
    /**
     * Returns the template filename when using bulk rendering.
     *
     * @return string filename
     */
    public function getBulkFilename()
    {
    }
    /**
     * Returns the template filename.
     *
     * @return string filename
     */
    public function getFilename()
    {
    }
}
