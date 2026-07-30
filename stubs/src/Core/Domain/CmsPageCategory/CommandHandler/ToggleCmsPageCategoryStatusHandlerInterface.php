<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\CommandHandler;

/**
 * Interface ToggleCmsPageCategoryStatusHandlerInterface defines contract for ToggleCmsPageCategoryStatusHandler.
 */
interface ToggleCmsPageCategoryStatusHandlerInterface
{
    /**
     * @param ToggleCmsPageCategoryStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\Command\ToggleCmsPageCategoryStatusCommand $command);
}
