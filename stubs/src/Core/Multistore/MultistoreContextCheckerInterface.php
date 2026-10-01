<?php

namespace PrestaShop\PrestaShop\Core\Multistore;

/**
 * Interface MultistoreContextCheckerInterface.
 */
interface MultistoreContextCheckerInterface
{
    /**
     * Check if current shop is in single store context.
     *
     * @return bool
     */
    public function isAllShopContext();
    /**
     * Check if current shop is in "Group" shop context.
     *
     * @return bool
     */
    public function isGroupShopContext();
    /**
     * Check if current shop is in "Single" shop context.
     *
     * @return bool
     */
    public function isSingleShopContext();
}
