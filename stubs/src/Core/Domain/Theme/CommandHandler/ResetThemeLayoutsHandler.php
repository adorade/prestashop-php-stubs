<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Class ResetThemeLayoutsHandler
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ResetThemeLayoutsHandler implements \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\ResetThemeLayoutsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager $themeManager
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
