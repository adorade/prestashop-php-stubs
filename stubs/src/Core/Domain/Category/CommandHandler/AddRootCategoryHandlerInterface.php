<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface AddRootCategoryHandler.
 */
interface AddRootCategoryHandlerInterface
{
    /**
     * @param AddRootCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\AddRootCategoryCommand $command);
}
