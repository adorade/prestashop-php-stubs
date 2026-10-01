<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * This class requires the PECL APC extension or PECL APCu extension to be installed.
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
