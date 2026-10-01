<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Command;

class EditApiClientCommand
{
    public function __construct(int $apiClientId)
    {
    }
    public function getApiClientId(): \PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\ApiClientId
    {
    }
    public function getClientId(): ?string
    {
    }
    public function setClientId(string $clientId): self
    {
    }
    public function getClientName(): ?string
    {
    }
    public function setClientName(string $clientName): self
    {
    }
    public function isEnabled(): ?bool
    {
    }
    public function setEnabled(bool $enabled): self
    {
    }
    public function getDescription(): ?string
    {
    }
    public function setDescription(string $description): self
    {
    }
    public function getScopes(): ?array
    {
    }
    public function setScopes(?array $scopes): self
    {
    }
    /** Returns the lifetime in milliseconds. Default is 3600. */
    public function getLifetime(): ?int
    {
    }
    public function setLifetime(?int $lifetime): self
    {
    }
}
