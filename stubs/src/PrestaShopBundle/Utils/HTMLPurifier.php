<?php

namespace PrestaShopBundle\Utils;

class HTMLPurifier
{
    public function __construct(
        private readonly \Symfony\Component\Filesystem\Filesystem $filesystem,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(param: 'prestashop.legacy_cache_dir')]
        private readonly string $cacheDir
    )
    {
    }
    /**
     * Filters an HTML snippet/document to be XSS-free and standards-compliant.
     *
     * @param string $html String of HTML to purify
     *
     * @return string Purified HTML
     */
    public function purify($html)
    {
    }
}
