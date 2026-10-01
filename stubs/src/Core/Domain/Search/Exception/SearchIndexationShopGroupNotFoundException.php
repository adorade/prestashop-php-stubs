<?php

namespace PrestaShop\PrestaShop\Core\Domain\Search\Exception;

class SearchIndexationShopGroupNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Search\Exception\SearchIndexationInvalidContextException
{
    public \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId;
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId, string $message = '', int $code = 0, ?\Throwable $previous = null)
    {
    }
    public function getShopGroupId(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId
    {
    }
}
