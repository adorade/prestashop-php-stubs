<?php

namespace PrestaShop\PrestaShop\Core\Context;

class ApiClient
{
    public function __construct(private int $id, private string $clientId, private array $scopes, private ?string $externalIssuer, private int $shopId)
    {
    }
    public function getId(): int
    {
    }
    public function getClientId(): string
    {
    }
    public function hasScope(string $scope): bool
    {
    }
    public function getScopes(): array
    {
    }
    public function getExternalIssuer(): ?string
    {
    }
    public function getShopId(): int
    {
    }
}
