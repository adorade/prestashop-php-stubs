<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Defines contract for BulkDeleteCartRuleHandler
 */
interface BulkDeleteCartRuleHandlerInterface
{
    /**
     * @param BulkDeleteCartRuleCommand $command
     *
     * @throws CartRuleException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\BulkDeleteCartRuleCommand $command): void;
}
