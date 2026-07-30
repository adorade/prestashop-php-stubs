<?php

namespace PrestaShop\PrestaShop\Adapter\Product\CommandHandler;

/**
 * Adds a category to a product
 *
 * @internal
 */
final class AssignProductToCategoryHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\CommandHandler\AssignProductToCategoryHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository)
    {
    }
    /**
     * @param AssignProductToCategoryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Command\AssignProductToCategoryCommand $command)
    {
    }
}
