<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see DuplicateProductCommand
 */
interface DuplicateProductHandlerInterface
{
    /**
     * @param DuplicateProductCommand $command
     *
     * @return ProductId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\DuplicateProductCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;
}
