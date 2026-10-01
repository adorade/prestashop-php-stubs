<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler;

/**
 * Handles command which toggles cart rule status
 */
final class ToggleCartRuleStatusHandler extends \PrestaShop\PrestaShop\Adapter\CartRule\AbstractCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler\ToggleCartRuleStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\ToggleCartRuleStatusCommand $command): void
    {
    }
}
