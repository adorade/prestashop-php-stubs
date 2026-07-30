<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface AddCategoryHandlerInterface.
 */
interface AddCategoryHandlerInterface
{
    /**
     * @param AddCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\AddCategoryCommand $command);
}
