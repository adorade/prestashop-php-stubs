<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles adding cart rule to cart.
 */
interface AddCartRuleToCartHandlerInterface
{
    /**
     * @param AddCartRuleToCartCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCartRuleToCartCommand $command);
}
