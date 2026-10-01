<?php

namespace PrestaShopBundle\EventListener\Admin\Context;

/**
 * Listener dedicated to set up Shop context for the Back-Office/Admin application.
 */
class ShopContextSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Priority lower than EmployeeContextListener so that EmployeeContext is correctly initialized
     */
    public const KERNEL_REQUEST_PRIORITY = \PrestaShopBundle\EventListener\Admin\Context\EmployeeContextSubscriber::KERNEL_REQUEST_PRIORITY - 1;
    /**
     * Priority higher than Symfony router listener (which is 32)
     */
    public const BEFORE_ROUTER_PRIORITY = 33;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Context\ShopContextBuilder $shopContextBuilder, private readonly \PrestaShop\PrestaShop\Core\Context\EmployeeContext $employeeContext, private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Adapter\Feature\MultistoreFeature $multistoreFeature, private readonly \Symfony\Component\Routing\Matcher\RequestMatcherInterface $router, private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShop\PrestaShop\Core\Shop\ShopListResolverInterface $shopListResolver)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function initShopContextOnLogin(\Symfony\Component\Security\Core\Event\AuthenticationSuccessEvent $authenticationSuccessEvent): void
    {
    }
    public function initDefaultShopContext(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
    /**
     * @throws \ReflectionException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function initShopContext(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
