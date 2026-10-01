<?php

namespace PrestaShop\PrestaShop\Core\Domain\Discount\Exception;

class CannotUpdateDiscountException extends \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountException
{
    public const FAILED_UPDATE_DISCOUNT = 1;
    public const FAILED_UPDATE_CONDITIONS = 2;
}
