<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class ResetThemeLayoutsHandler
 */
final class ResetThemeLayoutsHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\ResetThemeLayoutsHandlerInterface
{
    /**
     * @param ThemeManager $themeManager
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\ResetThemeLayoutsCommand $command)
    {
    }
}
