<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * Deletes cart in bulk action using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteCartHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\BulkDeleteCartHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Cart\Repository\CartRepository $cartRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\BulkDeleteCartCommand $command): void
    {
    }
    protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId $id
     * @param mixed $command
     *
     * @return void
     */
    protected function handleSingleAction(mixed $id, mixed $command): void
    {
    }
    protected function supports($id): bool
    {
    }
}
