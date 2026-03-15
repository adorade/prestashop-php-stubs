<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract for UpdateProductTagsHandler
 */
interface UpdateProductTagsHandlerInterface
{
    /**
     * @param SetProductTagsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetProductTagsCommand $command): void;
}
