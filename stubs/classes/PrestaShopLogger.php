<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * Class PrestaShopLoggerCore.
 */
class PrestaShopLoggerCore extends \ObjectModel
{
    /**
     * List of log level types.
     */
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
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'log', 'primary' => 'id_log', 'fields' => ['severity' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => \true], 'error_code' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'message' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => \true, 'size' => 4194303], 'object_id' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'id_shop' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => \true], 'id_shop_group' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => \true], 'id_lang' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'allow_null' => \true], 'in_all_shops' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'], 'id_employee' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'], 'object_type' => ['type' => self::TYPE_STRING, 'validate' => 'isValidObjectClassName'], 'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'], 'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate']]];
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
     *
     * @since 1.7.0
     */
    protected function isPresent()
    {
    }
}
