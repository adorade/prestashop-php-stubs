<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class DeleteThemeHandler
 */
final class DeleteThemeHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\DeleteThemeHandlerInterface
{
    /**
     * @param ThemeManager $themeManager
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager)
    {
    }
    /**
     * @param DeleteThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\DeleteThemeCommand $command)
    {
    }
}
