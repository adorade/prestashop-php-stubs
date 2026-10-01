<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteDiscountsHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler\BulkDeleteDiscountsHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\CannotDeleteDiscountException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\BulkDeleteDiscountsCommand $command): void
    {
    }
}
