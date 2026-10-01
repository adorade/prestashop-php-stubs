<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Interface DeleteCategoryHandlerInterface.
 */
interface DeleteCategoryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryCommand $command);
}
