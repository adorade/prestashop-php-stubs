<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler;

/**
 * Handles deletion of cart rule using legacy object model
 */
final class DeleteCartRuleHandler extends \PrestaShop\PrestaShop\Adapter\CartRule\AbstractCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler\DeleteCartRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\DeleteCartRuleCommand $command): void
    {
    }
}
