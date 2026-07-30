<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract for AddProductHandler
 */
interface AddProductHandlerInterface
{
    /**
     * @param AddProductCommand $command
     *
     * @return ProductId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\AddProductCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;
}
