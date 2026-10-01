<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface EditCategoryHandlerInterface.
 */
interface EditCategoryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\EditCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\EditCategoryCommand $command);
}
