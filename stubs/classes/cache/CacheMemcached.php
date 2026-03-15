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
 * This class require PECL Memcached extension.
 */
class CacheMemcachedCore extends \Cache
{
    /**
     * @var Memcached
     */
    protected $memcached;
    /**
     * @var bool Connection status
     */
    protected $is_connected = \false;
    public function __construct()
    {
    }
    public function isConnected()
    {
    }
    public function __destruct()
    {
    }
    /**
     * Connect to memcached server.
     */
    public function connect()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function _set($key, $value, $ttl = 0)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function _get($key)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function _exists($key)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function _delete($key)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function _deleteMulti(array $keyArray)
    {
    }
    /**
     * @see Cache::_writeKeys()
     */
    protected function _writeKeys()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function flush()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function set($key, $value, $ttl = 0)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
    }
    /**
     * {@inheritdoc}
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
     * Add a memcached server.
     *
     * @param string $ip
     * @param int $port
     * @param int $weight
     *
     * @return bool
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
     * Delete a memcached server.
     *
     * @param int $id_server
     *
     * @return bool
     */
    public static function deleteServer($id_server)
    {
    }
}
