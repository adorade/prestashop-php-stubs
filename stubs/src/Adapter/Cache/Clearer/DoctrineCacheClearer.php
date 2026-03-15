<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer;

final class DoctrineCacheClearer implements \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface
{
    public function __construct(\Symfony\Component\Cache\DoctrineProvider $doctrineProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function clear()
    {
    }
}
