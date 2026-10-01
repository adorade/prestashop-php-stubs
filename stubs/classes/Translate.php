<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Class TranslateCore.
 */
class TranslateCore
{
    public static $regexSprintfParams = '#(?:%%|%(?:[0-9]+\$)?[+-]?(?:[ 0]|\'.)?-?[0-9]*(?:\.[0-9]+)?[bcdeufFosxX])#';
    public static $regexClassicParams = '/%\w+%/';
    /**
     * @param string $string
     * @param string $class
     * @param bool $addslashes
     * @param bool $htmlentities
     * @param array|null $sprintf
     *
     * @return string
     */
    public static function getFrontTranslation($string, $class, $addslashes = \false, $htmlentities = \true, $sprintf = \null)
    {
    }
    /**
     * Get a translation for a module.
     *
     * @param string|ModuleCore $module
     * @param string $originalString
     * @param string $source
     * @param string|array|null $sprintf
     * @param bool $js
     * @param string|null $locale
     * @param bool $fallback [default=true] If true, this method falls back to the new translation system if no translation is found
     *
     * @return mixed|string
     *
     * @throws Exception
     */
    public static function getModuleTranslation($module, $originalString, $source, $sprintf = \null, $js = \false, $locale = \null, $fallback = \true, $escape = \true)
    {
    }
    /**
     * Get a translation for a PDF.
     *
     * @param string $string
     * @param array|null $sprintf
     *
     * @return string
     */
    public static function getPdfTranslation($string, $sprintf = \null)
    {
    }
    /**
     * Check if string use a specif syntax for sprintf and replace arguments if use it.
     *
     * @param string $string
     * @param array $args
     *
     * @return string
     */
    public static function checkAndReplaceArgs($string, $args)
    {
    }
    /**
     * Perform operations on translations after everything is escaped and before displaying it.
     */
    public static function postProcessTranslation($string, $params)
    {
    }
}
