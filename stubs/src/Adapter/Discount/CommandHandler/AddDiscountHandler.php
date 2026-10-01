<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddDiscountHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler\AddDiscountHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Update\DiscountBuilder $discountBuilder, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Validate\DiscountValidator $discountValidator, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Update\DiscountConditionsUpdater $discountConditionsUpdater, private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountTypeRepository $discountTypeRepository)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\AddDiscountCommand $command): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
}
