<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * This class require Xcache extension.
 */
class CacheXcacheCore extends \Cache
{
    public function __construct()
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
}
