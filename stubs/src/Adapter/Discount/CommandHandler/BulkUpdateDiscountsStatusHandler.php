<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkUpdateDiscountsStatusHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Discount\CommandHandler\BulkUpdateDiscountsStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\CannotUpdateDiscountException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Discount\Command\BulkUpdateDiscountsStatusCommand $command): void
    {
    }
}
