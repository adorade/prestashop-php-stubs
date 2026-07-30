<?php

namespace PrestaShopBundle\Form\Admin\Sell\Product\EventListener;

/**
 * This listener dynamically updates the choices allowed in the feature value selector,
 * choices are fetched based on the selected feature.
 */
class FeatureValueListener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    /**
     * @param ConfigurableFormChoiceProviderInterface $featureValuesChoiceProvider
     * @param FormCloner $formCloner
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface $featureValuesChoiceProvider, \PrestaShopBundle\Form\FormCloner $formCloner, \Symfony\Contracts\Translation\TranslatorInterface $translator)
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
    public function updateFormOptions(\Symfony\Component\Form\FormEvent $event): void
    {
    }
}
