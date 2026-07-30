<?php

/**
 * @since 1.5
 */
class HTMLTemplateOrderSlipCore extends \HTMLTemplateInvoice
{
    /**
     * @var Order
     */
    public $order;
    /**
     * @var OrderSlip
     */
    public $order_slip;
    /**
     * @var int Cart id
     */
    public $id_cart;
    /**
     * @param OrderSlip $order_slip
     * @param Smarty $smarty
     *
     * @throws PrestaShopException
     */
    public function __construct(\OrderSlip $order_slip, \Smarty $smarty)
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
    /**
     * Returns the tax tab content.
     *
     * @return string Tax tab html content
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
     * @return array
     */
    public function getProductTaxesBreakdown()
    {
    }
    /**
     * Returns Shipping tax breakdown elements.
     *
     * @return array Shipping tax breakdown elements
     */
    public function getShippingTaxesBreakdown()
    {
    }
}
