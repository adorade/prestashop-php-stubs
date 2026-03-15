<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Exception;

class CustomerMessageException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    public const ORDER_CUSTOMER_NOT_FOUND = 1;
}
