<?php

class HTMLTemplateShipmentDeliverySlipCore extends \HTMLTemplate
{
    /**
     * @var Order
     */
    public $order;
    /**
     * @var \PrestaShopBundle\Entity\Shipment
     */
    public $shipment;
    /**
     * @var OrderInvoice|null Order invoice for address information
     */
    public $order_invoice;
    /**
     * @param array{
     *     shipment: \PrestaShopBundle\Entity\Shipment,
     *     order: Order,
     *     order_invoice_collection: PrestaShopCollection,
     * } $shipmentData
     *
     * @throws PrestaShopException
     */
    public function __construct(array $shipmentData, \Smarty $smarty)
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
     * Get products from shipment entity
     *
     * @return array{
     *     quantity: int,
     *     product_quantity: int,
     *     id_order_detail: int,
     *     product_id: int,
     *     product_attribute_id: int,
     *     product_name: string,
     *     product_reference: string,
     *     product_supplier_reference: string,
     *     product_weight: float,
     *     product_price: float,
     *     unit_price_tax_incl: float,
     *     unit_price_tax_excl: float,
     *     image: Image|null,
     * }[]
     */
    protected function getShipmentProducts()
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
