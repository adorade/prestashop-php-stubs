<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides choices of additional delivery time notes types
 */
final class DeliveryTimeNoteTypesProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \Symfony\Component\Routing\RouterInterface $router
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param int $langId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Routing\RouterInterface $router, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, int $langId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
