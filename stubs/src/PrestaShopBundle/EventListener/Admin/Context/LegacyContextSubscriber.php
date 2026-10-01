<?php

namespace PrestaShopBundle\EventListener\Admin\Context;

/**
 * This listener is responsible for calling every LegacyContextBuilderInterface services and
 * ask them to build the legacy context. This interface is usually implement by the recent
 * context builders that are already responsible for building the recent split context services.
 *
 * Since they already handle the new context it makes sense to give them the responsibility of keeping
 * the backward compatibility on legacy context, so they also fill the legacy context fields based on
 * the settings that ere provided to them, this way we keep a single source of truth.
 *
 * This listener is only executed on kernel.controller event, this way we are sure that a Symfony controller
 * has been found, so this listener shouldn't mess with legacy pages.
 *
 * It is only used for the Back-Office/Admin application.
 */
class LegacyContextSubscriber implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * @param iterable|\PrestaShop\PrestaShop\Core\Context\LegacyContextBuilderInterface[] $legacyBuilders
     */
    public function __construct(private readonly iterable $legacyBuilders)
    {
    }
    public static function getSubscribedEvents(): array
    {
    }
    public function buildLegacyContext(\Symfony\Component\HttpKernel\Event\KernelEvent $event): void
    {
    }
}
