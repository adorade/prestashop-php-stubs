<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract for AddProductHandler
 */
interface AddProductHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Command\AddProductCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\AddProductCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId;
}
