<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * @internal
 */
interface AddCartRuleToOrderHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Order\Command\AddCartRuleToOrderCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\AddCartRuleToOrderCommand $command): void;
}
