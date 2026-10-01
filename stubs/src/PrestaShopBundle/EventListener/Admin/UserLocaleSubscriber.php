<?php

namespace PrestaShopBundle\EventListener\Admin;

class UserLocaleSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public const USER_LOCALE_PRIORITY = 15;
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration, private readonly \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository, private readonly \Symfony\Bundle\SecurityBundle\Security $security, private readonly \PrestaShopBundle\Security\Admin\SessionEmployeeProvider $sessionEmployeeProvider)
    {
    }
    public static function getSubscribedEvents(): array
    {
    }
    /**
     * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
     *
     * @return void
     */
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
