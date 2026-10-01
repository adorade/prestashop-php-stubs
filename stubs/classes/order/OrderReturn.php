<?php

class OrderReturnCore extends \ObjectModel
{
    /** @var int */
    public $id;
    /** @var int */
    public $id_customer;
    /** @var int */
    public $id_order;
    /** @var int */
    public $state;
    /** @var string message content */
    public $question;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_return', 'primary' => 'id_order_return', 'fields' => ['id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'question' => ['type' => self::TYPE_HTML, 'validate' => 'isCleanHtml', 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4], 'state' => ['type' => self::TYPE_STRING], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    /**
     * @param int[] $order_detail_list
     * @param int[] $product_qty_list
     *
     * @return void
     */
    public function addReturnDetail($order_detail_list, $product_qty_list)
    {
    }
    /**
     * @param int[] $order_detail_list
     * @param int[] $product_qty_list
     *
     * @return bool|void
     */
    public function checkEnoughProduct($order_detail_list, $product_qty_list)
    {
    }
    public function countProduct()
    {
    }
    public static function getOrdersReturn($customer_id, $order_id = \false, $no_denied = \false, ?\Context $context = \null, ?int $idOrderReturn = \null)
    {
    }
    public static function getOrdersReturnDetail($id_order_return)
    {
    }
    /**
     * @param int $order_return_id
     * @param Order $order
     *
     * @return array
     */
    public static function getOrdersReturnProducts($order_return_id, $order)
    {
    }
    public static function getReturnedCustomizedProducts($id_order)
    {
    }
    public static function deleteOrderReturnDetail($id_order_return, $id_order_detail, $id_customization = 0)
    {
    }
    /**
     * Get return details for one product line.
     *
     * @param int $id_order_detail
     */
    public static function getProductReturnDetail($id_order_detail)
    {
    }
    /**
     * Add returned quantity to products list.
     *
     * @param array $products
     * @param int $id_order
     */
    public static function addReturnedQuantity(&$products, $id_order)
    {
    }
    public static function setCancelledStatus(int $idOrderReturn, bool $cancelled): void
    {
    }
}
