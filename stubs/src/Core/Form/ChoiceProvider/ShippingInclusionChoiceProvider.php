<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides choices for shipping inclusion
 */
final class ShippingInclusionChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices(): array
    {
    }
}
