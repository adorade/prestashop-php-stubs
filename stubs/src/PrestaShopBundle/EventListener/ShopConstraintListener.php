<?php

namespace PrestaShopBundle\EventListener;

/**
 * This subscriber gets context from the legacy context and adds it the request attributes
 * so you can directly fetch the ShopConstraint on the controller arguments.
 */
class ShopConstraintListener
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Shop\Context $context)
    {
    }
    public function onKernelRequest(\Symfony\Component\HttpKernel\Event\RequestEvent $event): void
    {
    }
}
