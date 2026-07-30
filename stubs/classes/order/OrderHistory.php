<?php

class OrderHistoryCore extends \ObjectModel
{
    /** @var int Order id */
    public $id_order;
    /** @var int Order status id */
    public $id_order_state;
    /** @var int Employee id for this history entry */
    public $id_employee;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_history', 'primary' => 'id_order_history', 'fields' => ['id_order' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_order_state' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => \true], 'id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    /**
     * @see  ObjectModel::$webserviceParameters
     */
    protected $webserviceParameters = ['objectsNodeName' => 'order_histories', 'fields' => ['id_employee' => ['xlink_resource' => 'employees'], 'id_order_state' => ['required' => \true, 'xlink_resource' => 'order_states'], 'id_order' => ['xlink_resource' => 'orders']], 'objectMethods' => ['add' => 'addWs']];
    /**
     * Sets the new state of the given order.
     *
     * @param int $new_order_state
     * @param int|OrderCore $id_order
     * @param bool $use_existing_payment
     */
    public function changeIdOrderState($new_order_state, $id_order, $use_existing_payment = \false)
    {
    }
    /**
     * @param bool $autodate Optional
     * @param array|bool $template_vars Optional
     * @param Context|null $context Deprecated
     *
     * @return bool
     */
    public function addWithemail($autodate = \true, $template_vars = \false, \Context $context = \null)
    {
    }
    /**
     * @param Order $order
     * @param array|false $template_vars
     *
     * @return bool
     */
    public function sendEmail($order, $template_vars = \false)
    {
    }
    public function add($autodate = \true, $null_values = \false)
    {
    }
    /**
     * @return int
     */
    public function isValidated()
    {
    }
    /**
     * Add method for webservice create resource Order History
     * If sendemail=1 GET parameter is present sends email to customer otherwise does not.
     *
     * @return bool
     */
    public function addWs()
    {
    }
}
