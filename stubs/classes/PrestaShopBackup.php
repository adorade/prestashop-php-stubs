<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
    public function deleteSelection(array $list)
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
