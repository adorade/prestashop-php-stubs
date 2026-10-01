<?php

namespace PrestaShop\PrestaShop\Core\Exception;

/**
 * Exception thrown when trying to perform a multi shop action that doesn't fit
 * with the authorized shops.
 */
class MultiShopAccessDeniedException extends \PrestaShop\PrestaShop\Core\Exception\CoreException implements \Symfony\Component\HttpKernel\Exception\HttpExceptionInterface
{
    public function __construct(private readonly ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint = null, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function getShopConstraint(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    public function getStatusCode(): int
    {
    }
    public function getHeaders(): array
    {
    }
}
