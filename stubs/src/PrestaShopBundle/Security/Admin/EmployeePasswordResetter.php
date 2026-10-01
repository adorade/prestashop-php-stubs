<?php

namespace PrestaShopBundle\Security\Admin;

class EmployeePasswordResetter
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\EmployeeRepository $employeeRepository, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \Doctrine\ORM\EntityManagerInterface $entityManager, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShopBundle\Routing\AdminUrlGenerator $adminUrlGenerator, private readonly \PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, private readonly string $cookieKey)
    {
    }
    /**
     * @throws \PrestaShopBundle\Security\Admin\Exception\PasswordResetTemporarilyBlockedException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Employee\Exception\EmployeeNotFoundException
     * @throws \RuntimeException
     */
    public function sendResetEmail(string $email): void
    {
    }
    public function getEmployeeByValidResetPasswordToken(string $resetPasswordToken): ?\PrestaShopBundle\Entity\Employee\Employee
    {
    }
    public function resetPassword(\PrestaShopBundle\Entity\Employee\Employee $employee, string $newPassword): void
    {
    }
}
