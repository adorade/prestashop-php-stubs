<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllProductTagsCommand
 */
interface RemoveAllProductTagsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllProductTagsCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\RemoveAllProductTagsCommand $command): void;
}
