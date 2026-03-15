<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface ImportThemeHandlerInterface
 */
interface ImportThemeHandlerInterface
{
    /**
     * @param ImportThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\ImportThemeCommand $command);
}
