<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @deprecated since 9.0 and will be removed in 10.0, stock is now managed by new logic
 */
abstract class StockManagerModuleCore extends \Module
{
    public $stock_manager_class;
    public function install()
    {
    }
    public function hookStockManager()
    {
    }
}
