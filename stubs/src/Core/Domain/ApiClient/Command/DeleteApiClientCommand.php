<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Command;

class DeleteApiClientCommand
{
    public function __construct(int $apiClientId)
    {
    }
    public function getApiClientId(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientId
    {
    }
}
