<?php

namespace PrestaShop\PrestaShop\Core\Security\OAuth2;

class JwtTokenUser implements \Symfony\Component\Security\Core\User\UserInterface, \Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface
{
    protected array $roles = [];
    public function __construct(protected readonly string $userId, protected readonly array $scopes, protected readonly ?string $externalIssuer = null)
    {
    }
    public function getRoles(): array
    {
    }
    public function getPassword(): string
    {
    }
    public function getSalt(): ?string
    {
    }
    public function eraseCredentials()
    {
    }
    public function getUserIdentifier(): string
    {
    }
    public function getExternalIssuer(): ?string
    {
    }
    protected function convertScopesToRoles(): void
    {
    }
}
