<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * Handles deletion of cart using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteCartHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\DeleteCartHandlerInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Adapter\Cart\Repository\CartRepository $cartRepository, protected readonly \PrestaShop\PrestaShop\Adapter\Order\Repository\OrderRepository $orderRepository)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CannotDeleteCartException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CannotDeleteOrderedCartException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\DeleteCartCommand $command): void
    {
    }
}
