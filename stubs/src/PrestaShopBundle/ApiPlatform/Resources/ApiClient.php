<?php

namespace PrestaShopBundle\ApiPlatform\Resources;

#[\ApiPlatform\Metadata\ApiResource(operations: [new \PrestaShopBundle\ApiPlatform\Metadata\CQRSGet(uriTemplate: '/api-clients/infos', CQRSQuery: \PrestaShop\PrestaShop\Core\Domain\ApiClient\Query\GetApiClientForEditing::class, scopes: [], CQRSQueryMapping: ['[_context][apiClientId]' => '[apiClientId]'])], normalizationContext: ['skip_null_values' => false])]
class ApiClient
{
    #[\ApiPlatform\Metadata\ApiProperty(identifier: true)]
    public int $apiClientId;
    public string $clientId;
    public string $clientName;
    public string $description;
    public ?string $externalIssuer;
    public bool $enabled;
    public int $lifetime;
    public array $scopes;
}
