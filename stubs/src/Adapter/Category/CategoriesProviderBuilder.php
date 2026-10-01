<?php

namespace PrestaShop\PrestaShop\Adapter\Category;

class CategoriesProviderBuilder
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $context, private readonly \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeRepository $themeRepository, private readonly string $cacheDir, private readonly string $rootDir, private readonly string $categoriesConfigPath)
    {
    }
    public function build(): \PrestaShopBundle\Service\DataProvider\Admin\CategoriesProvider
    {
    }
}
