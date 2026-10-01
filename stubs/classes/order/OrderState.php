<?php

class OrderStateCore extends \ObjectModel
{
    /** @var string|array<int, string> Name */
    public $name;
    /** @var string|array<int, string> Template name if there is any e-mail to send */
    public $template;
    /** @var bool Send an e-mail to customer ? */
    public $send_email;
    public $module_name;
    /** @var bool Allow customer to view and download invoice when order is at this state */
    public $invoice;
    /** @var string Display state in the specified color */
    public $color;
    public $unremovable;
    /** @var bool Log authorization */
    public $logable;
    /** @var bool Delivery */
    public $delivery;
    /** @var bool Hidden */
    public $hidden;
    /** @var bool Shipped */
    public $shipped;
    /** @var bool Paid */
    public $paid;
    /** @var bool Attach PDF Invoice */
    public $pdf_invoice;
    /** @var bool Attach PDF Delivery Slip */
    public $pdf_delivery;
    /** @var bool True if order status has been deleted (staying in database as deleted) */
    public $deleted = \false;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_state', 'primary' => 'id_order_state', 'multilang' => \true, 'fields' => [
        'send_email' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'module_name' => ['type' => self::TYPE_STRING, 'validate' => 'isModuleName', 'size' => 255],
        'invoice' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor', 'size' => 32],
        'logable' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'shipped' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'unremovable' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'delivery' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'hidden' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'paid' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'pdf_delivery' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'pdf_invoice' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        'deleted' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => \PrestaShop\PrestaShop\Core\Domain\OrderState\OrderStateSettings::NAME_MAX_LENGTH],
        'template' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isTplName', 'size' => 64],
    ]];
    protected $webserviceParameters = ['fields' => ['unremovable' => [], 'delivery' => [], 'hidden' => []]];
    public const FLAG_NO_HIDDEN = 1;
    /* 00001 */
    public const FLAG_LOGABLE = 2;
    /* 00010 */
    public const FLAG_DELIVERY = 4;
    /* 00100 */
    public const FLAG_SHIPPED = 8;
    /* 01000 */
    public const FLAG_PAID = 16;
    /* 10000 */
    public const FLAG_EMAIL = 32;
    /* 100000 */
    /**
     * Get all available order statuses.
     *
     * @param int $id_lang Language id for status name
     * @param bool $filterDeleted
     *
     * @return array Order statuses
     */
    public static function getOrderStates($id_lang, $filterDeleted = \true)
    {
    }
    /**
     * Check if we can make a invoice when order is in this state.
     *
     * @param int $id_order_state State ID
     *
     * @return bool availability
     */
    public static function invoiceAvailable($id_order_state)
    {
    }
    public function isRemovable()
    {
    }
    /**
     * Check if a localized name in database for a specific lang (and excluding some IDs)
     *
     * @param string $name
     * @param int $idLang
     * @param int|null $excludeIdOrderState ID of the order state excluded for the search
     *
     * @return bool
     */
    public static function existsLocalizedNameInDatabase(string $name, int $idLang, ?int $excludeIdOrderState): bool
    {
    }
}
