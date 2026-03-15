<?php

namespace PrestaShop\PrestaShop\Core\Tax\Ecotax;

/**
 * Resets Ecotax for products
 */
interface ProductEcotaxResetterInterface
{
    /**
     * Resets ecotax for all products
     */
    public function reset();
}
