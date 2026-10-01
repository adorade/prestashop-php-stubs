<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler;

interface UpdateDiscountCommandHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\UpdateDiscountCommand $command): void;
}
