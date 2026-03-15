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
 * Class TranslateCore.
 *
 * @since 1.5.0
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
     * Get a translation for an admin controller.
     *
     * @deprecated Use Context::getContext()->getTranslator()->trans()
     *
     * @param string $string
     * @param string $class
     * @param bool $addslashes
     * @param bool $htmlentities
     * @param array|null $sprintf
     *
     * @return string
     */
    public static function getAdminTranslation($string, $class = 'AdminTab', $addslashes = \false, $htmlentities = \true, $sprintf = \null)
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
    /**
     * Compatibility method that just calls postProcessTranslation.
     *
     * @deprecated renamed this to postProcessTranslation, since it is not only used in relation to smarty
     */
    public static function smartyPostProcessTranslation($string, $params)
    {
    }
    /**
     * Helper function to make calls to postProcessTranslation more readable.
     *
     * @deprecated 1.7.1.0
     */
    public static function ppTags($string, $tags)
    {
    }
}
