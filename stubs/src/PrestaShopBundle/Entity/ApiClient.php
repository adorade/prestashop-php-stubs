<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ApiClientRepository")
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="api_client_client_id_idx", fields={"clientId", "externalIssuer"}), @ORM\UniqueConstraint(name="api_client_client_name_idx", fields={"clientName", "externalIssuer"})})
 */
#[\Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity(fields: ['clientId', 'externalIssuer'], ignoreNull: false)]
#[\Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity(fields: ['clientName', 'externalIssuer'], ignoreNull: false)]
class ApiClient implements \Symfony\Component\Security\Core\User\UserInterface, \Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface
{
    public function getId(): int
    {
    }
    public function setId(int $id): static
    {
    }
    public function getClientId(): string
    {
    }
    public function setClientId(string $clientId): static
    {
    }
    public function getClientName(): string
    {
    }
    public function setClientName(string $clientName): static
    {
    }
    public function getClientSecret(): ?string
    {
    }
    public function setClientSecret(?string $clientSecret): static
    {
    }
    public function isEnabled(): bool
    {
    }
    public function setEnabled(bool $enabled): static
    {
    }
    public function getScopes(): array
    {
    }
    public function setScopes(array $scopes): static
    {
    }
    public function getDescription(): string
    {
    }
    public function setDescription(string $description): static
    {
    }
    public function getLifetime(): int
    {
    }
    public function setLifetime(int $lifetime): static
    {
    }
    public function getExternalIssuer(): ?string
    {
    }
    public function setExternalIssuer(?string $externalIssuer): static
    {
    }
    public function getRoles(): array
    {
    }
    public function getPassword(): string
    {
    }
    public function eraseCredentials(): void
    {
    }
    public function getUserIdentifier(): string
    {
    }
}
