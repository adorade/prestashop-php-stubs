<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage\Exception;

/**
 * Base exception for order message subdomain
 */
class OrderMessageException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    public const FAILED_DELETE = 1;
    public const FAILED_BULK_DELETE = 2;
}
