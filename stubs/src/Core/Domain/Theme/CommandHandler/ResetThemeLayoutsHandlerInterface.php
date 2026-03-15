<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler;

/**
 * Interface ResetThemeLayoutsHandlerInterface
 */
interface ResetThemeLayoutsHandlerInterface
{
    /**
     * @param ResetThemeLayoutsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Theme\Command\ResetThemeLayoutsCommand $command);
}
