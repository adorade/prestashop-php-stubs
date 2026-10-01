<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteDiscountHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler\DeleteDiscountHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\DeleteDiscountCommand $command): void
    {
    }
}
