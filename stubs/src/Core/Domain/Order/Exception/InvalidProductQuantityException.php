<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Thrown when trying to add an invalid quantity or a product (<= 0)
 */
class InvalidProductQuantityException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
}
