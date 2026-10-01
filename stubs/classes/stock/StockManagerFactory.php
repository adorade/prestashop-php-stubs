<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * StockManagerFactory : factory of stock manager
 *
 * @deprecated since 9.0 and will be removed in 10.0, stock is now managed by new logic
 */
class StockManagerFactoryCore
{
    /**
     * @var StockManagerInterface|null Instance of the current StockManager
     */
    protected static $stock_manager;
    /**
     * Returns a StockManager.
     *
     * @return StockManagerInterface
     */
    public static function getManager()
    {
    }
    /**
     *  Looks for a StockManager in the modules list.
     *
     * @return StockManagerInterface
     */
    public static function execHookStockManagerFactory()
    {
    }
}
