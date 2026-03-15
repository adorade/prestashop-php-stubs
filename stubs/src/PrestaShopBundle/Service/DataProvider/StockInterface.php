<?php

namespace PrestaShopBundle\Service\DataProvider;

/**
 * @deprecated since 8.1 and will be removed in next major.
 *
 * Data provider for new Architecture, about Product stocks.
 *
 * This class will provide data from DB / ORM about Product stocks.
 */
interface StockInterface
{
    /**
     * Returns True if Stocks are managed by a module (or by legacy ASM).
     *
     * @return bool True if Stocks are managed by a module (or by legacy ASM)
     */
    public function isAsmGloballyActivated();
}
