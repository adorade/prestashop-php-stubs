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
 * Class UpgraderCore.
 */
class UpgraderCore
{
    public const DEFAULT_CHECK_VERSION_DELAY_HOURS = 24;
    public $rss_version_link;
    public $rss_md5file_link_dir;
    /**
     * @var bool contains true if last version is not installed
     */
    protected $need_upgrade = \false;
    protected $changed_files = [];
    protected $missing_files = [];
    public $version_name;
    public $version_num;
    public $version_is_modified = \null;
    /**
     * @var string contains hte url where to download the file
     */
    public $link;
    public $autoupgrade;
    public $autoupgrade_module;
    public $autoupgrade_last_version;
    public $autoupgrade_module_link;
    public $desc;
    public $changelog;
    public $md5;
    /**
     * UpgraderCore constructor.
     *
     * @param bool $autoload
     */
    public function __construct($autoload = \false)
    {
    }
    public function __get($var)
    {
    }
    /**
     * downloadLast download the last version of PrestaShop and save it in $dest/$filename.
     *
     * @param string $dest directory where to save the file
     * @param string $filename new filename
     *
     * @return bool
     *
     * @TODO ftp if copy is not possible (safe_mode for example)
     */
    public function downloadLast($dest, $filename = 'prestashop.zip')
    {
    }
    /**
     * @return bool
     */
    public function isLastVersion()
    {
    }
    /**
     * checkPSVersion ask to prestashop.com if there is a new version. return an array if yes, false otherwise.
     *
     * @return mixed
     */
    public function checkPSVersion($force = \false)
    {
    }
    /**
     * load the last version informations stocked in base.
     *
     * @return $this
     */
    public function loadFromConfig()
    {
    }
    /**
     * return an array of files
     * that the md5file does not match to the original md5file (provided by $rss_md5file_link_dir ).
     *
     * @return array
     */
    public function getChangedFilesList()
    {
    }
    /** populate $this->changed_files with $path
     * in sub arrays  mail, translation and core items.
     *
     * @param string $path filepath to add, relative to _PS_ROOT_DIR_
     */
    protected function addChangedFile($path)
    {
    }
    /** populate $this->missing_files with $path
     *
     * @param string $path filepath to add, relative to _PS_ROOT_DIR_
     */
    protected function addMissingFile($path)
    {
    }
    /**
     * @param SimpleXMLElement $node
     * @param array $currentPath
     * @param int $level
     */
    protected function browseXmlAndCompare($node, &$currentPath = [], $level = 1)
    {
    }
    /**
     * Compare checksum.
     *
     * @param string $path
     * @param string $originalSum
     *
     * @return bool
     */
    protected function compareChecksum($path, $originalSum)
    {
    }
    /**
     * Is this an authentic PrestaShop version?
     *
     * @return bool
     */
    public function isAuthenticPrestashopVersion()
    {
    }
}
