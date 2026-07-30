<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Interface for service that handles adding new cart rule.
 */
interface AddCartRuleHandlerInterface
{
    /**
     * @param AddCartRuleCommand $command
     *
     * @return CartRuleId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId;
}
