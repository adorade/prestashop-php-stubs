<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Defines contract for BulkToggleCartRuleStatusHandler
 */
interface BulkToggleCartRuleStatusHandlerInterface
{
    /**
     * @param BulkToggleCartRuleStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\BulkToggleCartRuleStatusCommand $command): void;
}
