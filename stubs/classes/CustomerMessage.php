<?php

/**
 * Class CustomerMessageCore.
 */
class CustomerMessageCore extends \ObjectModel
{
    public $id;
    /** @var int CustomerThread ID */
    public $id_customer_thread;
    /** @var int */
    public $id_employee;
    /** @var int */
    public $id_product;
    /** @var string */
    public $message;
    /** @var string */
    public $file_name;
    /** @var string */
    public $ip_address;
    /** @var string */
    public $user_agent;
    /** @var bool */
    public $private;
    /** @var string */
    public $date_add;
    /** @var string */
    public $date_upd;
    /** @var bool */
    public $read;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'customer_message', 'primary' => 'id_customer_message', 'fields' => ['id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId'], 'id_customer_thread' => ['type' => self::TYPE_INT], 'ip_address' => ['type' => self::TYPE_STRING, 'validate' => 'isIp2Long', 'size' => 16], 'message' => ['type' => self::TYPE_HTML, 'required' => \true, 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4, 'validate' => 'isCleanHtml'], 'file_name' => ['type' => self::TYPE_STRING, 'size' => 18], 'user_agent' => ['type' => self::TYPE_STRING, 'size' => 255], 'private' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'read' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool']]];
    /** @var array */
    protected $webserviceParameters = ['fields' => ['id_employee' => ['xlink_resource' => 'employees'], 'id_product' => ['xlink_resource' => 'products'], 'id_customer_thread' => ['xlink_resource' => 'customer_threads']]];
    /**
     * Get CustomerMessages by Order ID.
     *
     * @param int $idOrder Order ID
     * @param bool $private Private
     *
     * @return array|false|mysqli_result|PDOStatement|resource|null
     */
    public static function getMessagesByOrderId($idOrder, $private = \true)
    {
    }
    /**
     * Get total CustomerMessages.
     *
     * @param string|null $where Additional SQL query
     *
     * @return int Amount of CustomerMessages found
     */
    public static function getTotalCustomerMessages($where = \null)
    {
    }
    /**
     * Deletes current CustomerMessage from the database.
     *
     * @return bool `true` if delete was successful
     *
     * @throws PrestaShopException
     */
    public function delete()
    {
    }
    /**
     * Get the last message for a thread customer.
     *
     * @param int $id_customer_thread Thread customer reference
     *
     * @return string Last message
     */
    public static function getLastMessageForCustomerThread($id_customer_thread)
    {
    }
}
