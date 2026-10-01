<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject;

class CreatedApiClient
{
    public function __construct(int $apiClientId, ?string $secret = null)
    {
    }
    public function getApiClientId(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientId
    {
    }
    public function getSecret(): string
    {
    }
}
