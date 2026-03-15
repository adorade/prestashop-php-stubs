<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides choices of additional delivery time notes types
 */
final class DeliveryTimeNoteTypesProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param RouterInterface $router
     * @param ConfigurationInterface $configuration
     * @param int $contextLanguageId
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Symfony\Component\Routing\RouterInterface $router, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, int $contextLanguageId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
