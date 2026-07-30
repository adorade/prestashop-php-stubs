<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

/**
 * Provides currency choices where currency is represented by symbol (e.g. € for euro) and value is currency id.
 */
final class CurrencySymbolByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getChoices(array $options): array
    {
    }
}
