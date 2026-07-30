<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * @deprecated since 8.1 and will be removed in next major version.
 * Interface for service that set product to be enabled or disabled
 */
interface UpdateProductStatusHandlerInterface
{
    /**
     * @param UpdateProductStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\UpdateProductStatusCommand $command);
}
