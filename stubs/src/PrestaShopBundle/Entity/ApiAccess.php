<?php

namespace PrestaShopBundle\Entity;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\ApiAccessRepository")
 * @ORM\Table()
 * @UniqueEntity("name")
 *
 * @experimental
 */
class ApiAccess
{
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
    }
    /**
     * @return string
     */
    public function getClientId(): string
    {
    }
    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
    }
    /**
     * @return string
     */
    public function getClientSecret(): string
    {
    }
    /**
     * @param mixed $clientSecret
     */
    public function setClientSecret($clientSecret): void
    {
    }
    /**
     * @return AuthorizedApplication
     */
    public function getAuthorizedApplication(): \PrestaShopBundle\Entity\AuthorizedApplication
    {
    }
    /**
     * @param AuthorizedApplication $authorizedApplication
     */
    public function setAuthorizedApplication(\PrestaShopBundle\Entity\AuthorizedApplication $authorizedApplication): void
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
    }
    /**
     * @return array
     */
    public function getScopes(): array
    {
    }
    /**
     * @param array $scopes
     */
    public function setScopes(array $scopes): void
    {
    }
}
