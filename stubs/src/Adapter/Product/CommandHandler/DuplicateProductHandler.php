<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Handles @see DuplicateProductCommand
 */
final class DuplicateProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\DuplicateProductHandlerInterface
{
    /**
     * @param ProductDuplicator $productDuplicator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Update\ProductDuplicator $productDuplicator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\DuplicateProductCommand $command): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
