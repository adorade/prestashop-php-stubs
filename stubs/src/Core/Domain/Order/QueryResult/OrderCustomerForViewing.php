<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\QueryResult;

class OrderCustomerForViewing
{
    /**
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param string $gender
     * @param string $email
     * @param DateTimeImmutable $accountRegistrationDate
     * @param string $totalSpentSinceRegistration
     * @param int $validOrdersPlaced
     * @param string|null $privateNote
     * @param bool $isGuest
     * @param int $languageId
     * @param string $ape
     * @param string $siret
     * @param array $groups
     */
    public function __construct(int $id, string $firstName, string $lastName, string $gender, string $email, \DateTimeImmutable $accountRegistrationDate, string $totalSpentSinceRegistration, int $validOrdersPlaced, ?string $privateNote, bool $isGuest, int $languageId, string $ape = '', string $siret = '', array $groups = [])
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return string
     */
    public function getFirstName(): string
    {
    }
    /**
     * @return string
     */
    public function getLastName(): string
    {
    }
    /**
     * @return string
     */
    public function getGender(): string
    {
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
    }
    /**
     * @return DateTimeImmutable
     */
    public function getAccountRegistrationDate(): \DateTimeImmutable
    {
    }
    /**
     * @return string
     */
    public function getTotalSpentSinceRegistration(): string
    {
    }
    /**
     * @return int
     */
    public function getValidOrdersPlaced(): int
    {
    }
    /**
     * @return string|null
     */
    public function getPrivateNote(): ?string
    {
    }
    /**
     * @return bool
     */
    public function isGuest(): bool
    {
    }
    /**
     * @return string
     */
    public function getApe(): string
    {
    }
    /**
     * @return string
     */
    public function getSiret(): string
    {
    }
    /**
     * @return int
     */
    public function getLanguageId(): int
    {
    }
    /**
     * @return array
     */
    public function getGroups(): array
    {
    }
}
