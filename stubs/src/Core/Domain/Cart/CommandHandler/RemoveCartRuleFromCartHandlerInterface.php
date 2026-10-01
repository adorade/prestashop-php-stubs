<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handling removing cart rule from cart.
 */
interface RemoveCartRuleFromCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\RemoveCartRuleFromCartCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\RemoveCartRuleFromCartCommand $command);
}
