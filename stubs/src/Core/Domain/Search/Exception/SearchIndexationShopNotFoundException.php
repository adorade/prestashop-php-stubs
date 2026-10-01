<?php

namespace PrestaShop\PrestaShop\Core\Domain\Search\Exception;

class SearchIndexationShopNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Search\Exception\SearchIndexationInvalidContextException
{
    public \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId;
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function getShopId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
}
