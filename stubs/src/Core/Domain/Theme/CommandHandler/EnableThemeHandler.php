<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class EnableThemeHandler
 */
final class EnableThemeHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\EnableThemeHandlerInterface
{
    /**
     * @param ThemeManager $themeManager
     * @param CacheClearerInterface $smartyCacheClearer
     * @param bool $isSingleShopContext
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager, \PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $smartyCacheClearer, $isSingleShopContext)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CannotEnableThemeException
     * @throws ThemeConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\EnableThemeCommand $command)
    {
    }
}
