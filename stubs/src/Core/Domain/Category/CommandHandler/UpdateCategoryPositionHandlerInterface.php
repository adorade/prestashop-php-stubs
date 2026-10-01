<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface for service that updates category position
 */
interface UpdateCategoryPositionHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\UpdateCategoryPositionCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\UpdateCategoryPositionCommand $command);
}
