<?php

namespace PrestaShop\PrestaShop\Core\Util\File;

/**
 * This class adds a cache layer on top of the standard Yaml parser for improved performance
 */
final class YamlParser
{
    /**
     * YamlParser constructor.
     *
     * @param string $cacheDir
     * @param bool $useCache
     */
    public function __construct($cacheDir, $useCache = true)
    {
    }
    /**
     * Parse a YAML File and return the result
     *
     * @param string $sourceFile
     * @param bool $forceRefresh
     *
     * @return mixed The YAML converted to a PHP value
     *
     * @throws InvalidArgumentException
     * @throws RuntimeException
     * @throws ParseException
     */
    public function parse($sourceFile, $forceRefresh = false)
    {
    }
    /**
     * @param string $sourceFile
     *
     * @return string
     */
    public function getCacheFile($sourceFile)
    {
    }
}
