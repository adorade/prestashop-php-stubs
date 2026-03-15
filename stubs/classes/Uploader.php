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
 * Class UploaderCore.
 */
class UploaderCore
{
    public const DEFAULT_MAX_SIZE = 10485760;
    /**
     * UploaderCore constructor.
     *
     * @param string|null $name
     */
    public function __construct($name = \null)
    {
    }
    /**
     * @param array<string> $value
     *
     * @return self
     */
    public function setAcceptTypes($value)
    {
    }
    /**
     * @return array<string>
     */
    public function getAcceptTypes()
    {
    }
    /**
     * @param bool $value
     *
     * @return self
     */
    public function setCheckFileSize($value)
    {
    }
    /**
     * @param string|null $fileName
     *
     * @return string
     */
    public function getFilePath($fileName = \null)
    {
    }
    /**
     * @return array
     */
    public function getFiles()
    {
    }
    /**
     * @param int $value
     *
     * @return self
     */
    public function setMaxSize($value)
    {
    }
    /**
     * @return mixed
     */
    public function getMaxSize()
    {
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setName($value)
    {
    }
    /**
     * @return mixed
     */
    public function getName()
    {
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setSavePath($value)
    {
    }
    /**
     * @return int|null
     */
    public function getPostMaxSizeBytes()
    {
    }
    /**
     * @return string
     */
    public function getSavePath()
    {
    }
    /**
     * @param string $prefix
     *
     * @return string
     */
    public function getUniqueFileName($prefix = 'PS')
    {
    }
    /**
     * @return bool
     */
    public function checkFileSize()
    {
    }
    /**
     * @param null $dest
     *
     * @return array
     */
    public function process($dest = \null)
    {
    }
    /**
     * @param array<string, string> $file
     * @param string|null $dest
     *
     * @return mixed
     */
    public function upload($file, $dest = \null)
    {
    }
    /**
     * @param int $error_code
     *
     * @return string|int
     */
    protected function checkUploadError($error_code)
    {
    }
    /**
     * @param array $file
     *
     * @return bool
     */
    protected function validate(&$file)
    {
    }
    /**
     * @param string $filePath
     * @param bool $clearStatCache
     *
     * @return int
     *
     * @since 1.7.0
     */
    protected function getFileSize($filePath, $clearStatCache = \false)
    {
    }
    /**
     * @param string $var
     *
     * @return string
     *
     * @since 1.7.0
     */
    protected function getServerVars($var)
    {
    }
    /**
     * @param string $directory
     *
     * @return string
     *
     * @since 1.7.0
     */
    protected function normalizeDirectory($directory)
    {
    }
}
