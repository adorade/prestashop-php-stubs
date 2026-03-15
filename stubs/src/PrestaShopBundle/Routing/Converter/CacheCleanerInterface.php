<?php

namespace PrestaShopBundle\Routing\Converter;

interface CacheCleanerInterface
{
    public function clearCache(): void;
}
