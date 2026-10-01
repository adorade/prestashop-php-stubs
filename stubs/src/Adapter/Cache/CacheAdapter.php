<?php

namespace PrestaShop\PrestaShop\Adapter\Cache;

/**
 * Adapter for generic cache methods.
 */
class CacheAdapter
{
    /**
     * @param string $key
     * @param string $value
     */
    public function store($key, $value)
    {
    }
    /**
     * @param string $key
     *
     * @return mixed
     */
    public function retrieve($key)
    {
    }
    /**
     * @param string $key
     *
     * @return bool
     */
    public function isStored($key)
    {
    }
}
