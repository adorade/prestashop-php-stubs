<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CurrencyByIdChoiceProvider provides currency choices with ID values.
 */
final class CurrencyByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface, \PrestaShop\PrestaShop\Core\Form\FormChoiceAttributeProviderInterface
{
    /**
     * @param CurrencyDataProvider $currencyDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider)
    {
    }
    /**
     * Get currency choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
    public function getChoicesAttributes()
    {
    }
}
