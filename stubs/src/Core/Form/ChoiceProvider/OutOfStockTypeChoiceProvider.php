<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides form choices for "when product is out of stock" behavior
 */
final class OutOfStockTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
