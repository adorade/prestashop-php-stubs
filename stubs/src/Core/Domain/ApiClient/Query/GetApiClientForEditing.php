<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Query;

class GetApiClientForEditing
{
    public function __construct(int $apiClientId)
    {
    }
    public function getApiClientId(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientId
    {
    }
}
