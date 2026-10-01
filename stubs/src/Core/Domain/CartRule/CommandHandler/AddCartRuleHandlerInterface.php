<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Interface for service that handles adding new cart rule.
 */
interface AddCartRuleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId;
}
