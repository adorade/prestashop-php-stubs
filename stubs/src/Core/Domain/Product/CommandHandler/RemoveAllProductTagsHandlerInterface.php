<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllProductTagsCommand
 */
interface RemoveAllProductTagsHandlerInterface
{
    /**
     * @param RemoveAllProductTagsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllProductTagsCommand $command): void;
}
