<?php

namespace PrestaShopBundle\Form\Admin\Type\EventListener;

class PriceReductionListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider)
    {
    }
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
    }
    /**
     * @param \Symfony\Component\Form\FormEvent $event
     */
    public function adaptReductionField(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}
