<?php

namespace PrestaShopBundle\EventListener;

/**
 * Allow a redirection to the right url when using BetterSecurity annotation.
 */
class DemoModeEnabledListener
{
    /**
     * DemoModeEnabledListener constructor.
     *
     * @param \Symfony\Component\Routing\RouterInterface $router
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \Symfony\Component\HttpFoundation\Session\Session $session
     * @param \Doctrine\Common\Annotations\Reader $annotationReader
     * @param bool $isDemoModeEnabled
     */
    public function __construct(\Symfony\Component\Routing\RouterInterface $router, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\HttpFoundation\Session\Session $session, \Doctrine\Common\Annotations\Reader $annotationReader, $isDemoModeEnabled)
    {
    }
    /**
     * @param \Symfony\Component\HttpKernel\Event\FilterControllerEvent $event
     */
    public function onKernelController(\Symfony\Component\HttpKernel\Event\FilterControllerEvent $event)
    {
    }
}
