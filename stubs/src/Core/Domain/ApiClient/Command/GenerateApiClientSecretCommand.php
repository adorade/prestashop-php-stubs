<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Command;

class GenerateApiClientSecretCommand
{
    public function __construct(int $apiClientId)
    {
    }
    public function getApiClientId(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientId
    {
    }
}
