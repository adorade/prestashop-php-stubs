<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * @internal
 *
 * @deprecated Since 9.0 and will be removed in the next major.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SendCartToCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\SendCartToCustomerHanlderInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\SendCartToCustomerCommand $command)
    {
    }
}
