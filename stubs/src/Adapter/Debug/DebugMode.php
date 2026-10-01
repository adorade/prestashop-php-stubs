<?php

namespace PrestaShop\PrestaShop\Adapter\Debug;

/**
 * Utilitary class to manages the Debug mode legacy application.
 */
class DebugMode
{
    public const DEBUG_MODE_SUCCEEDED = 0;
    public const DEBUG_MODE_ERROR_NO_READ_ACCESS = 1;
    public const DEBUG_MODE_ERROR_NO_READ_ACCESS_CUSTOM = 2;
    public const DEBUG_MODE_ERROR_NO_WRITE_ACCESS = 3;
    public const DEBUG_MODE_ERROR_NO_WRITE_ACCESS_CUSTOM = 4;
    public const DEBUG_MODE_ERROR_NO_DEFINITION_FOUND = 5;
    /**
     * Is Debug Mode enabled? Checks on custom defines file first.
     *
     * @return bool Whether debug mode is enabled
     */
    public function isDebugModeEnabled()
    {
    }
    /**
     * Get the current debug mode from the defines file.
     *
     * @return string|null
     */
    public function getCurrentDebugMode()
    {
    }
    /**
     * Create php code based on the debug mode configuration.
     * Examples:
     *  define('_PS_MODE_DEV_', true);
     *  define('_PS_MODE_DEV_', isset($_COOKIE['debug']) && $_COOKIE['debug'] === 'debug_password');
     *  define('_PS_MODE_DEV_', isset($_COOKIE['debug']));
     *  define('_PS_MODE_DEV_', false);
     *
     * @param array $configuration {
     *                             debug_mode: bool
     *                             debug_cookie_name: string
     *                             debug_cookie_value: string
     *                             }
     *
     * @return string
     */
    public function createDebugModeFromConfiguration(array $configuration)
    {
    }
    /**
     * Enable Debug mode.
     *
     * @return int Whether changing debug mode succeeded or error code
     */
    public function enable()
    {
    }
    /**
     * Disable debug mode.
     *
     * @return int Whether changing debug mode succeeded or error code
     */
    public function disable()
    {
    }
    /**
     * Change value of _PS_MODE_DEV_ constant.
     *
     * @param string $value should be "true" or "false"
     *
     * @return int the debug mode
     */
    public function changePsModeDevValue($value)
    {
    }
}
