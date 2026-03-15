<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler;

/**
 * Defines contract for SetCarriersHandler
 */
interface SetCarriersHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\SetCarriersCommand $command): void;
}
