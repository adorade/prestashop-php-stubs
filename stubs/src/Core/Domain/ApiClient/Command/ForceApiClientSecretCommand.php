<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Command;

class ForceApiClientSecretCommand
{
    public function __construct(int $apiClientId, string $secret)
    {
    }
    public function getApiClientId(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientId
    {
    }
    public function getSecret(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientSecret
    {
    }
}
