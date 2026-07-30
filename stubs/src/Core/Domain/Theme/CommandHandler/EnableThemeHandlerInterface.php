<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface EnableThemeHandlerInterface
 */
interface EnableThemeHandlerInterface
{
    /**
     * @param EnableThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\EnableThemeCommand $command);
}
