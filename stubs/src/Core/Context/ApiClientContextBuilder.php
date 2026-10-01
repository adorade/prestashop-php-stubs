<?php

namespace PrestaShop\PrestaShop\Core\Context;

class ApiClientContextBuilder
{
    public function __construct(private \PrestaShopBundle\Entity\Repository\ApiClientRepository $apiClientRepository, private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    public function build(): \PrestaShop\PrestaShop\Core\Context\ApiClientContext
    {
    }
    public function setClientId(string $clientId): void
    {
    }
    public function setExternalIssuer(?string $externalIssuer): self
    {
    }
}
