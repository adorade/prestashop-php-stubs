<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CurrencyByIdChoiceProvider provides currency choices with ID values.
 */
final class CurrencyByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider)
    {
    }
    /**
     * Get currency choices.
     *
     * @return array
     */
    public function getChoices(): array
    {
    }
    public function getChoicesAttributes(): array
    {
    }
}
