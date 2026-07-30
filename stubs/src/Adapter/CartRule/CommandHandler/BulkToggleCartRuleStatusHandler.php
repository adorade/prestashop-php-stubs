<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler;

/**
 * Handles command which toggles cart rule status in bulk action
 */
final class BulkToggleCartRuleStatusHandler extends \PrestaShop\PrestaShop\Adapter\CartRule\AbstractCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler\BulkToggleCartRuleStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\BulkToggleCartRuleStatusCommand $command): void
    {
    }
}
