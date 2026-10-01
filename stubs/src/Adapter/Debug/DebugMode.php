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
}
