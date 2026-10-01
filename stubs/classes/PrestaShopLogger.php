<?php

/**
 * Class PrestaShopLoggerCore.
 */
class PrestaShopLoggerCore extends \ObjectModel
{
    /**
     * List of log level types.
     */
    public const LOG_SEVERITY_LEVEL_DEBUG = 0;
    public const LOG_SEVERITY_LEVEL_INFORMATIVE = 1;
    public const LOG_SEVERITY_LEVEL_WARNING = 2;
    public const LOG_SEVERITY_LEVEL_ERROR = 3;
    public const LOG_SEVERITY_LEVEL_MAJOR = 4;
    /** @var int Log id */
    public $id_log;
    /** @var int Log severity */
    public $severity;
    /** @var int Error code */
    public $error_code;
    /** @var string Message */
    public $message;
    /** @var string Object type (eg. Order, Customer...) */
    public $object_type;
    /** @var int Object ID */
    public $object_id;
    /** @var int Employee ID */
    public $id_employee;
    /** @var string Object creation date */
    public $date_add;
    /** @var string Object last modification date */
    public $date_upd;
    /** @var int|null Shop ID */
    public $id_shop;
    /** @var int|null Shop group ID */
    public $id_shop_group;
    /** @var int|null Language ID */
    public $id_lang;
    /** @var bool In all shops */
    public $in_all_shops;
    /** @var string|null */
    public $hash;
    protected static int $minLevelInDb;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'log', 'primary' => 'id_log', 'fields' => ['severity' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'error_code' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'message' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => \true, 'size' => \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_MEDIUMTEXT_UTF8_MB4], 'object_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => \true], 'id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => \true], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => \true], 'in_all_shops' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'object_type' => ['type' => self::TYPE_STRING, 'validate' => 'isValidObjectClassName', 'size' => 32], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
    protected static $is_present = [];
    /**
     * Send e-mail to the shop owner only if the minimal severity level has been reached.
     *
     * @param PrestaShopLogger $log
     */
    public static function sendByMail($log)
    {
    }
    /**
     * add a log item to the database and send a mail if configured for this $severity.
     *
     * @param string $message the log message
     * @param int $severity
     * @param int $errorCode
     * @param string $objectType
     * @param int $objectId
     * @param bool $allowDuplicate if set to true, can log several time the same information (not recommended)
     *
     * @return bool true if succeed
     */
    public static function addLog($message, $severity = 1, $errorCode = \null, $objectType = \null, $objectId = \null, $allowDuplicate = \false, $idEmployee = \null)
    {
    }
    /**
     * @return string hash
     */
    public function getHash()
    {
    }
    public static function eraseAllLogs()
    {
    }
    /**
     * check if this log message already exists in database.
     *
     * @return bool true if exists
     */
    protected function isPresent()
    {
    }
    protected static function getMinimumLevelInDB(): int
    {
    }
}
