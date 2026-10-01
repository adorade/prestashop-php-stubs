<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

class ThemeManagerBuilder
{
    public function __construct(private \Context $context, private readonly \Db $db, private ?\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator $themeValidator = null, ?\Psr\Log\LoggerInterface $logger = null, ?\PrestaShop\PrestaShop\Core\Context\ApiClientContext $apiClientContext = null)
    {
    }
    public function build()
    {
    }
    public function buildRepository(?\Shop $shop = null)
    {
    }
}
