<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class DuplicateOrderCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\DuplicateOrderCartHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\DuplicateOrderCartCommand $command)
    {
    }
}
