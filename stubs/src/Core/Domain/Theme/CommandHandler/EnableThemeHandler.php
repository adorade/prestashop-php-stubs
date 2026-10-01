<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class EnableThemeHandler
 */
final class EnableThemeHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\EnableThemeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager
     * @param \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $smartyCacheClearer
     * @param bool $isSingleShopContext
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $smartyCacheClearer, $isSingleShopContext)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Theme\Exception\CannotEnableThemeException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Theme\Exception\ThemeConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\EnableThemeCommand $command)
    {
    }
}
