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
 * Class PrestaShopBackupCore.
 */
class PrestaShopBackupCore
{
    /** @var string Object id */
    public $id;
    /** @var string Last error messages */
    public $error;
    /** @var string default backup directory. */
    public static $backupDir = '/backups/';
    /** @var string custom backup directory. */
    public $customBackupDir = \null;
    /** @var bool|string */
    public $psBackupAll = \true;
    /** @var bool|string */
    public $psBackupDropTable = \true;
    /**
     * Creates a new backup object.
     *
     * @param string $filename Filename of the backup file
     */
    public function __construct($filename = \null)
    {
    }
    /**
     * you can set a different path with that function.
     *
     * @TODO include the prefix name
     *
     * @param string $dir
     *
     * @return bool
     */
    public function setCustomBackupPath($dir)
    {
    }
    /**
     * get the path to use for backup (customBackupDir if specified, or default).
     *
     * @param string $filename filename to use
     *
     * @return string full path
     */
    public function getRealBackupPath($filename = \null)
    {
    }
    /**
     * Get the full path of the backup file.
     *
     * @param string $filename prefix of the backup file (datetime will be the second part)
     *
     * @return string The full path of the backup file, or false if the backup file does not exists
     */
    public static function getBackupPath($filename = '')
    {
    }
    /**
     * Check if a backup file exist.
     *
     * @param string $filename prefix of the backup file (datetime will be the second part)
     *
     * @return bool true if backup file exist
     */
    public static function backupExist($filename)
    {
    }
    /**
     * Get the URL used to retrieve this backup file.
     *
     * @return string The url used to request the backup file
     *
     * @deprecated As the call has been duplicated in the new Controller. Get the URL from the router instead.
     */
    public function getBackupURL()
    {
    }
    /**
     * Delete the current backup file.
     *
     * @return bool Deletion result, true on success
     */
    public function delete()
    {
    }
    /**
     * Deletes a range of backup files.
     *
     * @return bool True on success
     */
    public function deleteSelection($list)
    {
    }
    /**
     * Creates a new backup file.
     *
     * @return bool true on successful backup
     */
    public function add()
    {
    }
}
