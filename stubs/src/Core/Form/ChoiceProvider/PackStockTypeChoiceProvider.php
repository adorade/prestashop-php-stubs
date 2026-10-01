<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

final class PackStockTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $shopConfiguration
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $shopConfiguration)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices(): array
    {
    }
}
