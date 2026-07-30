<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler;

/**
 * Defines contract for ToggleCartRuleStatusHandler
 */
interface ToggleCartRuleStatusHandlerInterface
{
    /**
     * @param ToggleCartRuleStatusCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\ToggleCartRuleStatusCommand $command): void;
}
