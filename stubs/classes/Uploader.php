<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
     */
    protected function getFileSize($filePath, $clearStatCache = \false)
    {
    }
    /**
     * @param string $var
     *
     * @return string
     */
    protected function getServerVars($var)
    {
    }
    /**
     * @param string $directory
     *
     * @return string
     */
    protected function normalizeDirectory($directory)
    {
    }
}
