<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Command;

class AddApiClientCommand
{
    public function __construct(private readonly string $clientName, private readonly string $clientId, private readonly bool $enabled, private readonly string $description, private readonly int $lifetime, private readonly array $scopes = [])
    {
    }
    public function getClientName(): ?string
    {
    }
    public function getClientId(): ?string
    {
    }
    public function isEnabled(): ?bool
    {
    }
    public function getDescription(): ?string
    {
    }
    /**
     * @return string[]
     */
    public function getScopes(): array
    {
    }
    public function getLifetime(): ?int
    {
    }
}
