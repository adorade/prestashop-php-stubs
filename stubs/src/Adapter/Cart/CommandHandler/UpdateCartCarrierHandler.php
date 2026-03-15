<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * @internal
 */
final class UpdateCartCarrierHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\UpdateCartCarrierHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartCarrierCommand $command)
    {
    }
}
