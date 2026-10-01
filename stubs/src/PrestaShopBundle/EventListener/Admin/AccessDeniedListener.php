<?php

namespace PrestaShopBundle\EventListener\Admin;

/**
 * Allow a redirection to the right url when using BetterSecurity annotation.
 */
class AccessDeniedListener
{
    public function __construct(private readonly \Symfony\Component\Routing\RouterInterface $router, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, private readonly \Doctrine\Common\Annotations\Reader $annotationReader)
    {
    }
    public function onKernelException(\Symfony\Component\HttpKernel\Event\ExceptionEvent $event)
    {
    }
    public function handleAttributes(array $attributes, \Symfony\Component\HttpKernel\Event\ExceptionEvent $event): void
    {
    }
}
