<?php

/**
 * @since 1.5
 */
class HTMLTemplateDeliverySlipCore extends \HTMLTemplate
{
    /**
     * @var Order
     */
    public $order;
    /** @var OrderInvoice Order invoice */
    public $order_invoice;
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
     * Returns the template's HTML content.
     *
     * @return string HTML content
     */
    public function getContent()
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
