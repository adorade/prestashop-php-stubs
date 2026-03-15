<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * @internal
 */
final class UpdateProductQuantityInCartHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\UpdateProductQuantityInCartHandlerInterface
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
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateProductQuantityInCartCommand $command)
    {
    }
}
