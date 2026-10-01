<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract to handle @see DuplicateProductCommand
 */
interface DuplicateProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\DuplicateProductCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\DuplicateProductCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;
}
