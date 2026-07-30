<?php

namespace PrestaShop\PrestaShop\Adapter\Admin;

/**
 * Adds listeners to renderhook Twig function, to let adding legacy helpers like Kpi, etc...
 */
class LegacyBlockHelperSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * @return array The listeners array
     */
    public static function getSubscribedEvents()
    {
    }
    /**
     * Renders a Kpi block for a given legacy controller name.
     *
     * @param RenderingHookEvent $event
     *
     * @throws \Exception
     */
    public function renderKpi(\PrestaShopBundle\Service\Hook\RenderingHookEvent $event)
    {
    }
}
