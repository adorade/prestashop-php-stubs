<?php

namespace PrestaShopBundle\EventListener\Admin\Context;

/**
 * Listener dedicated to set up Employee context for the Back-Office/Admin application.
 */
class EmployeeContextSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Priority a bit lower than the FirewallListener
     */
    public const KERNEL_REQUEST_PRIORITY = 7;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContextBuilder $employeeContextBuilder, private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \PrestaShopBundle\Security\Admin\SessionEmployeeProvider $sessionEmployeeProvider)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
