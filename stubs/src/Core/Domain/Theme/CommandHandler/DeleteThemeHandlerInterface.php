<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface DeleteThemeHandlerInterface
 */
interface DeleteThemeHandlerInterface
{
    /**
     * @param DeleteThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\DeleteThemeCommand $command);
}
