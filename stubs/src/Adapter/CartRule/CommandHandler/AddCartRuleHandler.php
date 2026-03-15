<?php

namespace PrestaShop\PrestaShop\Adapter\CartRule\CommandHandler;

/**
 * Handles adding new cart rule using legacy logic.
 */
final class AddCartRuleHandler implements \PrestaShop\PrestaShop\Core\Domain\CartRule\CommandHandler\AddCartRuleHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand $command): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleId
    {
    }
}
