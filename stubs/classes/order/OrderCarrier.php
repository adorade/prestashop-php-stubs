<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class OrderCarrierCore extends \ObjectModel
{
    /** @var int */
    public $id_order_carrier;
    /** @var int */
    public $id_order;
    /** @var int */
    public $id_carrier;
    /** @var int */
    public $id_order_invoice;
    /** @var float */
    public $weight;
    /** @var float */
    public $shipping_cost_tax_excl;
    /** @var float */
    public $shipping_cost_tax_incl;
    /** @var string */
    public $tracking_number;
    /** @var string Object creation date */
    public $date_add;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_carrier', 'primary' => 'id_order_carrier', 'fields' => ['id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_carrier' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order_invoice' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'weight' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'shipping_cost_tax_excl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'shipping_cost_tax_incl' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'], 'tracking_number' => ['type' => self::TYPE_STRING, 'validate' => 'isTrackingNumber', 'size' => 64], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    protected $webserviceParameters = ['objectMethods' => ['update' => 'updateWs'], 'fields' => ['id_order' => ['xlink_resource' => 'orders'], 'id_carrier' => ['xlink_resource' => 'carriers']]];
    /**
     * @param Order $order Required
     *
     * @return bool
     */
    public function sendInTransitEmail($order)
    {
    }
    public function updateWs()
    {
    }
}
