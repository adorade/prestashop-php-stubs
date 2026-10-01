<?php

namespace PrestaShopBundle\Entity\Employee;

/**
 * @ORM\Entity(repositoryClass="PrestaShopBundle\Entity\Repository\EmployeeRepository")
 *
 * @ORM\Table(
 *     indexes={
 *
 *         @ORM\Index(name="employee_login", columns={"email", "passwd"}),
 *         @ORM\Index(name="id_employee_passwd", columns={"id_employee", "passwd"}),
 *         @ORM\Index(name="id_profile", columns={"id_profile"}),
 *     },
 *  )
 */
class Employee implements \Symfony\Component\Security\Core\User\UserInterface, \Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface, \Symfony\Component\Security\Core\User\EquatableInterface, \PrestaShopBundle\Security\Admin\SessionEmployeeInterface
{
    public const ROLE_EMPLOYEE = 'ROLE_EMPLOYEE';
    public function __construct()
    {
    }
    public function getId(): int
    {
    }
    public function getUserIdentifier(): string
    {
    }
    public function getRoles(): array
    {
    }
    public function eraseCredentials()
    {
    }
    /**
     * If you change this method you should probably also update the serialize/unserialize methods.
     *
     * @param \Symfony\Component\Security\Core\User\UserInterface $user
     *
     * @return bool
     */
    public function isEqualTo(\Symfony\Component\Security\Core\User\UserInterface $user): bool
    {
    }
    public function getProfile(): \PrestaShopBundle\Entity\Employee\Profile
    {
    }
    public function getProfileId(): int
    {
    }
    public function setProfile(\PrestaShopBundle\Entity\Employee\Profile $profile): static
    {
    }
    public function getSessions(): \Doctrine\Common\Collections\Collection
    {
    }
    public function addSession(\PrestaShopBundle\Entity\Employee\EmployeeSession $employeeSession): static
    {
    }
    public function removeSession(\PrestaShopBundle\Entity\Employee\EmployeeSession $employeeSession): static
    {
    }
    public function removeSessionById(int $sessionId): static
    {
    }
    public function hasSession(?int $sessionId, ?string $sessionToken): bool
    {
    }
    public function removeAllSessions(): static
    {
    }
    public function getDefaultLanguage(): ?\PrestaShopBundle\Entity\Lang
    {
    }
    public function getDefaultLocale(): string
    {
    }
    public function setDefaultLanguageId(?\PrestaShopBundle\Entity\Lang $defaultLanguage): static
    {
    }
    public function getFirstName(): string
    {
    }
    public function setFirstName(string $firstName): static
    {
    }
    public function getLastName(): string
    {
    }
    public function setLastName(string $lastName): static
    {
    }
    public function getEmail(): string
    {
    }
    public function setEmail(string $email): static
    {
    }
    public function getPassword(): string
    {
    }
    public function setPassword(string $password): static
    {
    }
    public function getPasswordLastGeneration(): \DateTime
    {
    }
    public function setPasswordLastGeneration(\DateTime $passwordLastGeneration): static
    {
    }
    public function getDefaultTabId(): int
    {
    }
    public function setDefaultTabId(int $defaultTabId): static
    {
    }
    public function isActive(): bool
    {
    }
    public function setActive(bool $active): static
    {
    }
    public function getLastConnectionDate(): \DateTime
    {
    }
    public function setLastConnectionDate(\DateTime $lastConnectionDate): static
    {
    }
    public function getResetPasswordToken(): ?string
    {
    }
    public function setResetPasswordToken(?string $resetPasswordToken): static
    {
    }
    public function getResetPasswordValidity(): ?\DateTime
    {
    }
    public function setResetPasswordValidity(?\DateTime $resetPasswordValidity): static
    {
    }
    public function hasValidResetPasswordToken(): bool
    {
    }
    public function isHasEnabledGravatar(): bool
    {
    }
    public function setHasEnabledGravatar(bool $hasEnabledGravatar): static
    {
    }
    public function getStatsDateFrom(): ?\DateTime
    {
    }
    public function setStatsDateFrom(?\DateTime $statsDateFrom): static
    {
    }
    public function getStatsDateTo(): ?\DateTime
    {
    }
    public function setStatsDateTo(?\DateTime $statsDateTo): static
    {
    }
    public function getStatsCompareFrom(): ?\DateTime
    {
    }
    public function setStatsCompareFrom(?\DateTime $statsCompareFrom): static
    {
    }
    public function getStatsCompareTo(): ?\DateTime
    {
    }
    public function setStatsCompareTo(?\DateTime $statsCompareTo): static
    {
    }
    public function getStatsCompareOption(): int
    {
    }
    public function setStatsCompareOption(int $statsCompareOption): static
    {
    }
    public function getPreselectDateRange(): ?string
    {
    }
    public function setPreselectDateRange(?string $preselectDateRange): static
    {
    }
    public function getBoColor(): ?string
    {
    }
    public function setBoColor(?string $boColor): static
    {
    }
    public function getBoTheme(): ?string
    {
    }
    public function setBoTheme(?string $boTheme): static
    {
    }
    public function getBoCss(): ?string
    {
    }
    public function setBoCss(?string $boCss): static
    {
    }
    public function getBoWidth(): int
    {
    }
    public function setBoWidth(int $boWidth): static
    {
    }
    public function isBoMenu(): bool
    {
    }
    public function setBoMenu(bool $boMenu): static
    {
    }
    public function getOptIn(): ?bool
    {
    }
    public function setOptIn(?bool $optIn): static
    {
    }
    public function getLastOrderId(): int
    {
    }
    public function setLastOrderId(int $lastOrderId): static
    {
    }
    public function getLastCustomerMessageId(): int
    {
    }
    public function setLastCustomerMessageId(int $lastCustomerMessageId): static
    {
    }
    public function getLastCustomerId(): int
    {
    }
    public function setLastCustomerId(int $lastCustomerId): static
    {
    }
    /**
     * Optimize the way the employee is serialized in the session, it is important to return
     * all the required info to later check that the serialized data is equal to the Employee
     * in DB (including the profile). If you change the isEqualTo method you should probably
     * update this serialization as well.
     */
    public function __serialize(): array
    {
    }
    public function __unserialize(array $data): void
    {
    }
}
