<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler;

interface DeleteDiscountHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\DeleteDiscountCommand $command): void;
}
