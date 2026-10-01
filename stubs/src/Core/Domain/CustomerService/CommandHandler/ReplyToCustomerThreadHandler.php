<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class ReplyToCustomerThreadHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\ReplyToCustomerThreadHandlerInterface
{
    /**
     * @param \Context $context
     */
    public function __construct(\Context $context)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\ReplyToCustomerThreadCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\ReplyToCustomerThreadCommand $command)
    {
    }
}
