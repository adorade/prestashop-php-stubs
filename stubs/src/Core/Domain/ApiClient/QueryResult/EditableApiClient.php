<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\QueryResult;

class EditableApiClient
{
    public function __construct(private readonly int $apiClientId, private readonly string $clientId, private readonly string $clientName, private readonly bool $enabled, private readonly string $description, private readonly array $scopes, private readonly int $lifetime, private readonly ?string $externalIssuer)
    {
    }
    public function getApiClientId(): int
    {
    }
    public function getClientId(): string
    {
    }
    public function getClientName(): string
    {
    }
    public function isEnabled(): bool
    {
    }
    public function getDescription(): string
    {
    }
    /**
     * @return string[]
     */
    public function getScopes(): array
    {
    }
    public function getLifetime(): int
    {
    }
    public function getExternalIssuer(): ?string
    {
    }
}
