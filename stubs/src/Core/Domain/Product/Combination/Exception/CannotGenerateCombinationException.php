<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception;

class CannotGenerateCombinationException extends \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Exception\CombinationException
{
    public const DIFFERENT_ATTRIBUTES_BETWEEN_SHOPS = 1;
}
