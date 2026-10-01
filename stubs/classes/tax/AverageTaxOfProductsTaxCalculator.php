<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class AverageTaxOfProductsTaxCalculator
{
    public $computation_method = 'average_tax_of_products';
    public function __construct(\PrestaShop\PrestaShop\Core\Foundation\Database\DatabaseInterface $db, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    public function setIdOrder($id_order)
    {
    }
    public function getTaxesAmount($price_before_tax, $price_after_tax = \null, $round_precision = 2, $round_mode = \null)
    {
    }
}
