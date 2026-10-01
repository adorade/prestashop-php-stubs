<?php

namespace PrestaShopBundle\EventListener\Admin;

/**
 * Security layer for annotations and AdminSecurity attributes.
 * It is based on Symfony's IsGrantedListener, we have adapted it for the use of our own AdminSecurity attribute,
 * itself based on IsGranted attribute
 */
class AdminSecurityListener
{
    public function __construct(private readonly \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authChecker, private readonly \Doctrine\Common\Annotations\Reader $annotationReader)
    {
    }
    /**
     * @throws \ReflectionException
     */
    public function onKernelController(\Symfony\Component\HttpKernel\Event\ControllerEvent $event): void
    {
    }
}
