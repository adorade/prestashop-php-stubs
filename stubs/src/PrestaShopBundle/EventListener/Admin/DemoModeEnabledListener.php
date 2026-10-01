<?php

namespace PrestaShopBundle\EventListener\Admin;

#[\Symfony\Component\EventDispatcher\Attribute\AsEventListener(event: \Symfony\Component\HttpKernel\Event\ControllerEvent::class, method: 'onKernelController')]
class DemoModeEnabledListener
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $shopConfiguration, private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function onKernelController(\Symfony\Component\HttpKernel\Event\ControllerEvent $event): void
    {
    }
}
