<?php

namespace PrestaShopBundle\Security\Admin;

class EmployeePasswordResetter
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\EmployeeRepository $employeeRepository, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \Doctrine\ORM\EntityManagerInterface $entityManager, private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \PrestaShop\PrestaShop\Core\Crypto\Hashing $hashing, private readonly string $cookieKey)
    {
    }
    /**
     * @param string $email
     *
     * @return string
     *
     * @throws \PrestaShopBundle\Security\Admin\Exception\PasswordResetTemporarilyBlockedException
     * @throws \Symfony\Component\Security\Core\Exception\UserNotFoundException
     * @throws \RuntimeException
     */
    public function sendResetEmail(string $email): string
    {
    }
    public function getEmployeeByValidResetPasswordToken(string $resetPasswordToken): ?\PrestaShopBundle\Entity\Employee\Employee
    {
    }
    public function resetPassword(\PrestaShopBundle\Entity\Employee\Employee $employee, string $newPassword): void
    {
    }
}
