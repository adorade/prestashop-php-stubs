<?php

namespace PrestaShop\PrestaShop\Core\Context;

class ApiClientContext
{
    public function __construct(private ?\PrestaShop\PrestaShop\Core\Context\ApiClient $apiClient)
    {
    }
    public function getApiClient(): ?\PrestaShop\PrestaShop\Core\Context\ApiClient
    {
    }
}
