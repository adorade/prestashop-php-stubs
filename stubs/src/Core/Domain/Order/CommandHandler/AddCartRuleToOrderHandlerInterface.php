<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler;

/**
 * @internal
 */
interface AddCartRuleToOrderHandlerInterface
{
    /**
     * @param AddCartRuleToOrderCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\AddCartRuleToOrderCommand $command): void;
}
