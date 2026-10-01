<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class UpdateOrderStatusHandler extends \PrestaShop\PrestaShop\Adapter\Order\AbstractOrderHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\UpdateOrderStatusHandlerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, private \PrestaShop\PrestaShop\Core\Mutation\MutationTracker $mutationTracker)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\UpdateOrderStatusCommand $command)
    {
    }
}
