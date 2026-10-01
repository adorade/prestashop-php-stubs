<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * Immutable DTO Class representing the employee accessible via the EmployeeContext
 *
 * @experimental Depends on ADR https://github.com/PrestaShop/ADR/pull/33
 */
class Employee
{
    public function __construct(protected int $id, protected int $profileId, protected int $languageId, protected string $firstName, protected string $lastName, protected string $email, protected string $password, protected string $imageUrl, protected int $defaultTabId, protected int $defaultShopId, protected array $associatedShopIds, protected array $associatedShopGroupIds)
    {
    }
    public function getId(): int
    {
    }
    public function getProfileId(): int
    {
    }
    public function getLanguageId(): int
    {
    }
    public function getFirstName(): string
    {
    }
    public function getLastName(): string
    {
    }
    public function getEmail(): string
    {
    }
    public function getPassword(): string
    {
    }
    public function getImageUrl(): string
    {
    }
    public function getDefaultTabId(): int
    {
    }
    public function getAssociatedShopIds(): array
    {
    }
    public function getDefaultShopId(): int
    {
    }
    public function getAssociatedShopGroupIds(): array
    {
    }
}
