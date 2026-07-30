<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler;

/**
 * Deletes cart rules in bulk action using legacy object model
 */
final class BulkDeleteCartRuleHandler extends \PrestaShop\PrestaShop\Adapter\CartRule\AbstractCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler\BulkDeleteCartRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\BulkDeleteCartRuleCommand $command): void
    {
    }
}
