<?php

namespace PrestaShop\PrestaShop\Core\Cache\Clearer;

/**
 * Class CacheClearerChain clears entire PrestaShop cache.
 */
final class CacheClearerChain implements \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface
{
    /**
     * @param CacheClearerInterface ...$cacheClearers
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface ...$cacheClearers)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
}
