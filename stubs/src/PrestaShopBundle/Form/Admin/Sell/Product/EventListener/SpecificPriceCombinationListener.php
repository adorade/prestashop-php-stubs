<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

/**
 * This listener dynamically updates the choices allowed in the specific price combination id selector,
 * because all the choices are populated using javascript
 */
class SpecificPriceCombinationListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\PrestaShopBundle\Form\FormCloner $formCloner, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository)
    {
    }
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
    }
    /**
     * @param FormEvent $event
     */
    public function updateCombinationChoices(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}
