<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface EnableThemeHandlerInterface
 */
interface EnableThemeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Theme\Command\EnableThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\EnableThemeCommand $command);
}
