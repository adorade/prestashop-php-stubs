<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * Interface for service that handles removing cart rule from given order.
 */
interface DeleteCartRuleFromOrderHandlerInterface
{
    /**
     * @param DeleteCartRuleFromOrderCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\DeleteCartRuleFromOrderCommand $command);
}
