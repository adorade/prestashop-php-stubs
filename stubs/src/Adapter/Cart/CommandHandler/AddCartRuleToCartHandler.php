<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * @internal
 */
final class AddCartRuleToCartHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\AddCartRuleToCartHandlerInterface
{
    /**
     * @param ContextStateManager $contextStateManager
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCartRuleToCartCommand $command)
    {
    }
}
