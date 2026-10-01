<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DuplicateDiscountHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler\DuplicateDiscountHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Update\DiscountDuplicator $discountDuplicator)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\DuplicateDiscountCommand $command): \PrestaShop\PrestaShop\Core\Domain\Discount\ValueObject\DiscountId
    {
    }
}
