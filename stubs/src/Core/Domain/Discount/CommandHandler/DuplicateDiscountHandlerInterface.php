<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler;

interface DuplicateDiscountHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\DuplicateDiscountCommand $command): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId;
}
