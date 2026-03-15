<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer;

/**
 * Class SymfonyCacheClearer clears Symfony cache directly from filesystem.
 *
 * @internal
 */
final class SymfonyCacheClearer implements \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface
{
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
}
