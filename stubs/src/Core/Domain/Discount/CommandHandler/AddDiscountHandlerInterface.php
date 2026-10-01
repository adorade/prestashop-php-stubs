<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler;

interface AddDiscountHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\AddDiscountCommand $command): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId;
}
