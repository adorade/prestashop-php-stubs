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
 * This class require PECL Memcache extension.
 */
class CacheMemcacheCore extends \Cache
{
    /**
     * @var Memcache
     */
    protected $memcache;
    /**
     * @var bool Connection status
     */
    protected $is_connected = \false;
    public function __construct()
    {
    }
    public function __destruct()
    {
    }
    /**
     * Connect to memcache server.
     */
    public function connect()
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
     * Store a data in cache.
     *
     * @param string $key
     * @param mixed $value
     * @param int $ttl
     *
     * @return bool
     */
    public function set($key, $value, $ttl = 0)
    {
    }
    /**
     * Retrieve a data from cache.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key)
    {
    }
    /**
     * Check if a data is cached.
     *
     * @param string $key
     *
     * @return bool
     */
    public function exists($key)
    {
    }
    /**
     * Delete one or several data from cache (* joker can be used, but avoid it !)
     * 	E.g.: delete('*'); delete('my_prefix_*'); delete('my_key_name');.
     *
     * @param string $key
     *
     * @return bool
     */
    public function delete($key)
    {
    }
    /**
     * Close connection to memcache server.
     *
     * @return bool
     */
    protected function close()
    {
    }
    /**
     * Add a memcache server.
     *
     * @param string $ip
     * @param int $port
     * @param int $weight
     */
    public static function addServer($ip, $port, $weight)
    {
    }
    /**
     * Get list of memcached servers.
     *
     * @return array
     */
    public static function getMemcachedServers()
    {
    }
    /**
     * Delete a memcache server.
     *
     * @param int $id_server
     */
    public static function deleteServer($id_server)
    {
    }
}
