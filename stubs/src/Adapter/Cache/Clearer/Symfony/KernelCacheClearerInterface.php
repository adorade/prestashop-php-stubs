<?php

namespace PrestaShop\PrestaShop\Adapter\Cache\Clearer\Symfony;

interface KernelCacheClearerInterface
{
    public function clearKernelCache(\AppKernel $kernel, string $environment): bool;
}
