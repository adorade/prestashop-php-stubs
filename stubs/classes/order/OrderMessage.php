<?php

class OrderMessageCore extends \ObjectModel
{
    /** @var string|array<int, string> Name */
    public $name;
    /** @var string|array<int, string> Message content */
    public $message;
    /** @var string Object creation date */
    public $date_add;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_message', 'primary' => 'id_order_message', 'multilang' => \true, 'fields' => [
        'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => 128],
        'message' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isMessage', 'required' => \true, 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4],
    ]];
    protected $webserviceParameters = ['fields' => ['id' => ['sqlId' => 'id_discount_type', 'xlink_resource' => 'order_message_lang'], 'date_add' => ['sqlId' => 'date_add']]];
    public static function getOrderMessages($id_lang)
    {
    }
}
