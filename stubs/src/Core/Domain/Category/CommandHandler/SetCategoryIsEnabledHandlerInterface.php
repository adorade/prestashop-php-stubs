<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface for service that set category to be enabled or disabled.
 */
interface SetCategoryIsEnabledHandlerInterface
{
    /**
     * @param SetCategoryIsEnabledCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\SetCategoryIsEnabledCommand $command);
}
