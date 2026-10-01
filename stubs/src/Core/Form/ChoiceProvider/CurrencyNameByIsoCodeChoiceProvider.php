<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class CurrencyNameByIsoCodeChoiceProvider is responsible for retrieving currency names from cldr library.
 */
final class CurrencyNameByIsoCodeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Localization\CLDR\CurrencyData[] $cldrAllCurrencies
     */
    public function __construct(array $cldrAllCurrencies)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
