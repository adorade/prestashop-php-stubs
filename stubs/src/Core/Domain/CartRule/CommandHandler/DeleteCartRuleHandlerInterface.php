<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Defines contract for delete cart rule handler
 */
interface DeleteCartRuleHandlerInterface
{
    /**
     * @param DeleteCartRuleCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\DeleteCartRuleCommand $command): void;
}
