<?php

namespace PrestaShop\PrestaShop\Core\Domain\Search\Exception;

class SearchIndexationProductNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Search\Exception\SearchIndexationInvalidContextException
{
    protected \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId;
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
}
