<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker;

/**
 * This checker is used in multishop view, some actions should not be displayed for products
 * associated to multiple shops. If there is only one it's ok though.
 */
class ProductSingleShopAssociatedAccessibilityChecker implements \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\AccessibilityCheckerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Multistore\MultistoreContextCheckerInterface $multiStoreContext)
    {
    }
    /**
     * @param array{associated_shops_ids?: array<int>} $record
     *
     * @return bool
     */
    public function isGranted(array $record)
    {
    }
}
