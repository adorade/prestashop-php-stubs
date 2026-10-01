<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class OrderPaymentCore extends \ObjectModel
{
    public $order_reference;
    public $id_currency;
    /**
     * @var float
     */
    public $amount;
    public $payment_method;
    public $conversion_rate;
    public $transaction_id;
    public $card_number;
    public $card_brand;
    public $card_expiration;
    public $card_holder;
    public $date_add;
    /**
     * @var int|null
     */
    public $id_employee;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_payment', 'primary' => 'id_order_payment', 'fields' => ['order_reference' => ['type' => self::TYPE_STRING, 'size' => 255], 'id_currency' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'amount' => ['type' => self::TYPE_FLOAT, 'validate' => 'isPrice', 'required' => \true], 'payment_method' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 255], 'conversion_rate' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'transaction_id' => ['type' => self::TYPE_STRING, 'size' => 254], 'card_number' => ['type' => self::TYPE_STRING, 'size' => 254], 'card_brand' => ['type' => self::TYPE_STRING, 'size' => 254], 'card_expiration' => ['type' => self::TYPE_STRING, 'size' => 254], 'card_holder' => ['type' => self::TYPE_STRING, 'size' => 254], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'allow_null' => \true]]];
    public function add($autodate = \true, $nullValues = \false)
    {
    }
    /**
     * Get the detailed payment of an order.
     *
     * @param string $order_reference
     *
     * @return array
     */
    public static function getByOrderReference($order_reference)
    {
    }
    /**
     * Get Order Payments By Invoice ID.
     *
     * @param int $id_invoice Invoice ID
     *
     * @return PrestaShopCollection|array Collection of OrderPayment
     */
    public static function getByInvoiceId($id_invoice)
    {
    }
    /**
     * Return order invoice object linked to the payment.
     *
     * @param int $id_order Order Id
     */
    public function getOrderInvoice($id_order)
    {
    }
}
