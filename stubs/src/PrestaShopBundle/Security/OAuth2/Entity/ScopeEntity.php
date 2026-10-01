<?php

namespace PrestaShopBundle\Security\OAuth2\Entity;

class ScopeEntity implements \League\OAuth2\Server\Entities\ScopeEntityInterface
{
    public function __construct(public readonly string $identifier)
    {
    }
    public function getIdentifier(): string
    {
    }
    public function jsonSerialize(): mixed
    {
    }
}
