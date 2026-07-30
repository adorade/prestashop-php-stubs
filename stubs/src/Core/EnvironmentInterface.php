<?php

namespace PrestaShop\PrestaShop\Core;

/**
 * EnvironmentInterface is used to store/access environment information like the current
 * environment name or to know if debug mode is enabled.
 */
interface EnvironmentInterface
{
    /**
     * Indicates the current environment (dev|prod|test)
     *
     * @return string
     */
    public function getName();
    /**
     * Indicates if debug mode is enabled
     *
     * @return bool
     */
    public function isDebug();
    /**
     * Indicates the path to the cache directory
     *
     * @return string
     */
    public function getCacheDir();
}
