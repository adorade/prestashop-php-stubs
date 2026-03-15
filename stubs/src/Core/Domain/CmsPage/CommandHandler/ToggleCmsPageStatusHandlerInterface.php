<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPage\CommandHandler;

/**
 * Defines contract for ToggleCmsPageStatusHandler.
 */
interface ToggleCmsPageStatusHandlerInterface
{
    /**
     * @param ToggleCmsPageStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPage\Command\ToggleCmsPageStatusCommand $command);
}
