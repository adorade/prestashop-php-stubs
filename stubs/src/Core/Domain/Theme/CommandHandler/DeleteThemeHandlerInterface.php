<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface DeleteThemeHandlerInterface
 */
interface DeleteThemeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Theme\Command\DeleteThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\DeleteThemeCommand $command);
}
