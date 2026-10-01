<?php

namespace PrestaShopBundle\EventListener\Admin\Context;

/**
 * Listener dedicated to set up Language context for the Back-Office/Admin application.
 */
class LanguageContextSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Priority lower than EmployeeContextListener so that EmployeeContext is correctly initialized
     */
    public const KERNEL_REQUEST_PRIORITY = \PrestaShopBundle\EventListener\Admin\Context\EmployeeContextSubscriber::KERNEL_REQUEST_PRIORITY - 1;
    /**
     * Priority higher than Symfony router listener (which is 32)
     */
    public const BEFORE_ROUTER_PRIORITY = 33;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\LanguageContextBuilder $languageContextBuilder, private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, private readonly \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function initDefaultLanguageContext(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
    public function initLanguageContext(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
