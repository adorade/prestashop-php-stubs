<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateDiscountHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler\UpdateDiscountCommandHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Update\Filler\DiscountFiller $discountFiller, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Validate\DiscountValidator $discountValidator, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Update\DiscountConditionsUpdater $discountConditionsUpdater, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\UpdateDiscountCommand $command): void
    {
    }
}
