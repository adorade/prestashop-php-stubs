<?php

/**
 * Class PrestaShopAutoload.
 *
 * @since 1.5
 */
class PrestaShopAutoload
{
    /**
     * @var PrestaShopAutoload|null
     */
    protected static $instance;
    /**
     * @var string Root directory
     */
    protected $root_dir;
    /**
     *  @var array array('classname' => 'path/to/override', 'classnamecore' => 'path/to/class/core')
     */
    public $index = [];
    public $_include_override_path = \true;
    /**
     * @var LegacyClassLoader
     */
    protected $classLoader;
    protected static $class_aliases = ['Collection' => 'PrestaShopCollection', 'Autoload' => 'PrestaShopAutoload', 'Backup' => 'PrestaShopBackup', 'Logger' => 'PrestaShopLogger'];
    protected function __construct()
    {
    }
    /**
     * Get instance of autoload (singleton).
     *
     * @return PrestaShopAutoload
     */
    public static function getInstance()
    {
    }
    /**
     * Get Class index cache file.
     *
     * @return string
     */
    public static function getCacheFileIndex()
    {
    }
    /**
     * Get Namespaced class stub file.
     *
     * @return string
     */
    public static function getNamespacedStubFileIndex()
    {
    }
    /**
     * Get Class stub file.
     *
     * @return string
     */
    public static function getStubFileIndex()
    {
    }
    /**
     * Retrieve informations about a class in classes index and load it.
     *
     * @param string $className
     */
    public function load($className)
    {
    }
    /**
     * Generate classes index.
     */
    public function generateIndex()
    {
    }
    /**
     * @param string $filename
     * @param string $content
     *
     * @return bool
     *
     * @see http://api.symfony.com/3.0/Symfony/Component/Filesystem/Filesystem.html#method_dumpFile
     */
    public function dumpFile($filename, $content)
    {
    }
    /**
     * Retrieve recursively all classes in a directory and its subdirectories.
     *
     * @param string $path Relative path from root to the directory
     *
     * @return array
     */
    protected function getClassesFromDir($path)
    {
    }
    /**
     * Get Class path.
     *
     * @param string $classname
     */
    public function getClassPath($classname)
    {
    }
}
