<?php

namespace PrestaShopBundle\EventListener\Admin;

/**
 * This subscriber watches the various authentication event and saves or removes the persisted
 * Employee sessions accordingly. It is also in charge of maintaining some backward compatibility
 * with the legacy cookie.
 */
class EmployeeSessionSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    use \Symfony\Component\Security\Http\Util\TargetPathTrait;
    public function __construct(private readonly \PrestaShopBundle\Security\Admin\EmployeeProvider $employeeProvider, private readonly \PrestaShopBundle\Entity\Repository\EmployeeRepository $employeeRepository, private readonly \Doctrine\ORM\EntityManagerInterface $entityManager, private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \Psr\Log\LoggerInterface $logger, private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, private readonly \Symfony\Component\Security\Csrf\CsrfTokenManagerInterface $tokenManager, private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContextBuilder $employeeContextBuilder)
    {
    }
    public static function getSubscribedEvents(): array
    {
    }
    public function createEmployeeSession(\Symfony\Component\Security\Http\Event\AuthenticationTokenCreatedEvent $event): void
    {
    }
    public function onLoginSuccess(\Symfony\Component\Security\Http\Event\LoginSuccessEvent $event): void
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
    public function onKernelResponse(\Symfony\Component\HttpKernel\Event\ResponseEvent $event): void
    {
    }
    public function cleanEmployeeSessions(\Symfony\Component\Security\Http\Event\TokenDeauthenticatedEvent $event): void
    {
    }
    public function onLogout(\Symfony\Component\Security\Http\Event\LogoutEvent $event): void
    {
    }
    protected function logoutAndStopEvent(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
    protected function getEmployeeSessionFromToken(): ?\PrestaShopBundle\Entity\Employee\EmployeeSession
    {
    }
    protected function getIpAddressFromToken(): ?string
    {
    }
    /**
     * Update legacy cookie for backward compatibility, values are always set but we only
     * write it on login success.
     */
    protected function updateLegacyCookie(\Symfony\Component\HttpFoundation\Request $request, bool $write = false): void
    {
    }
}
