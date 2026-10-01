<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

class ReductionTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider)
    {
    }
    /**
     * @return array<string, string>
     */
    public function getChoices(): array
    {
    }
}
