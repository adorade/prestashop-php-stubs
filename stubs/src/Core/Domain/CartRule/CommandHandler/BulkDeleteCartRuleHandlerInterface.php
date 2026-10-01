<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Defines contract for BulkDeleteCartRuleHandler
 */
interface BulkDeleteCartRuleHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\BulkDeleteCartRuleCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\BulkDeleteCartRuleCommand $command): void;
}
