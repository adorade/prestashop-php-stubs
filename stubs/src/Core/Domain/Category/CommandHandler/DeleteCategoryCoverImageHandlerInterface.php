<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\CommandHandler;

/**
 * Defines contract for service which handles cover image delete command.
 */
interface DeleteCategoryCoverImageHandlerInterface
{
    /**
     * @param DeleteCategoryCoverImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Command\DeleteCategoryCoverImageCommand $command);
}
