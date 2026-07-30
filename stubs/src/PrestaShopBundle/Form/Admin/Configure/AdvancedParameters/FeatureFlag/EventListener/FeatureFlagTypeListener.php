<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\FeatureFlag\EventListener;

/**
 * @experimental
 */
class FeatureFlagTypeListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Adapter\Tab\TabDataProvider $tabDataProvider)
    {
    }
    public static function getSubscribedEvents()
    {
    }
    public function onFeatureFlagBetaSave(\PrestaShopBundle\Service\Hook\HookEvent $event): void
    {
    }
}
