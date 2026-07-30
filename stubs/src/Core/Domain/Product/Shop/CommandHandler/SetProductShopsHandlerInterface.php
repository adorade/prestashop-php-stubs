<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Shop\CommandHandler;

interface SetProductShopsHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Shop\Command\SetProductShopsCommand $command): void;
}
