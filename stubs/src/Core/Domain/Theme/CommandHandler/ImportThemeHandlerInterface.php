<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface ImportThemeHandlerInterface
 */
interface ImportThemeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Theme\Command\ImportThemeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\ImportThemeCommand $command);
}
