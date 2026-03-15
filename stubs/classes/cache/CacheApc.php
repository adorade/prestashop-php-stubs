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
 * This class requires the PECL APC extension or PECL APCu extension to be installed.
 *
 * @since 1.5.0
 */
class CacheApcCore extends \Cache
{
    /** @var bool Whether APCu is enabled */
    public $apcu;
    /**
     * CacheApcCore constructor.
     */
    public function __construct()
    {
    }
    /**
     * Delete one or several data from cache (* joker can be used, but avoid it !)
     * 	E.g.: delete('*'); delete('my_prefix_*'); delete('my_key_name');.
     *
     * @param string $key Cache key
     *
     * @return bool Whether the key was deleted
     */
    public function delete($key)
    {
    }
    /**
     * @see Cache::_set()
     */
    protected function _set($key, $value, $ttl = 0)
    {
    }
    /**
     * @see Cache::_get()
     */
    protected function _get($key)
    {
    }
    /**
     * @see Cache::_exists()
     */
    protected function _exists($key)
    {
    }
    /**
     * @see Cache::_delete()
     */
    protected function _delete($key)
    {
    }
    /**
     * @see Cache::_writeKeys()
     */
    protected function _writeKeys()
    {
    }
    /**
     * @see Cache::flush()
     */
    public function flush()
    {
    }
    /**
     * Store data in the cache.
     *
     * @param string $key Cache Key
     * @param mixed $value Value
     * @param int $ttl Time to live in the cache
     *                 0 = unlimited
     *
     * @return bool Whether the data was successfully stored
     */
    public function set($key, $value, $ttl = 0)
    {
    }
    /**
     * Retrieve data from the cache.
     *
     * @param string $key Cache key
     *
     * @return mixed Data
     */
    public function get($key)
    {
    }
    /**
     * Check if data has been cached.
     *
     * @param string $key Cache key
     *
     * @return bool Whether the data has been cached
     */
    public function exists($key)
    {
    }
}
