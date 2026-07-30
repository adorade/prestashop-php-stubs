<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Exception;

/**
 * Is thrown when using pack (e.g. adding to cart) which is out of stock
 */
class PackOutOfStockException extends \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductOutOfStockException
{
}
