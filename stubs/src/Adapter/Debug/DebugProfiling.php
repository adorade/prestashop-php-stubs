<?php

namespace PrestaShop\PrestaShop\Adapter\Debug;

/**
 * Utilitary class to manages the Debug profiling legacy application.
 */
class DebugProfiling
{
    public const DEBUG_PROFILING_SUCCEEDED = 0;
    public const DEBUG_PROFILING_ERROR_NO_READ_ACCESS = 1;
    public const DEBUG_PROFILING_ERROR_NO_READ_ACCESS_CUSTOM = 2;
    public const DEBUG_PROFILING_ERROR_NO_WRITE_ACCESS = 3;
    public const DEBUG_PROFILING_ERROR_NO_WRITE_ACCESS_CUSTOM = 4;
    public const DEBUG_PROFILING_ERROR_NO_DEFINITION_FOUND = 5;
    /**
     * Is the profiler enabled? Checks on custom defines file first.
     *
     * @return bool Whether debug profiling is enabled
     */
    public function isProfilingEnabled(): bool
    {
    }
    /**
     * Enable Debug profiling.
     *
     * @return int Whether changing debug profiling succeeded or error code
     */
    public function enable(): int
    {
    }
    /**
     * Disable debug profiling.
     *
     * @return int Whether changing debug profiling succeeded or error code
     */
    public function disable(): int
    {
    }
}
