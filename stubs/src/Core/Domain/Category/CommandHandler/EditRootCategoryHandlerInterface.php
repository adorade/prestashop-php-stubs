<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface EditRootCategoryHandlerInterface.
 */
interface EditRootCategoryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\EditRootCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\EditRootCategoryCommand $command);
}
