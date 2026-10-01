<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

/**
 * Provides choices of manufacturers with manufacturer name as key and id as value
 */
final class ManufacturerNameByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(array $manufacturers)
    {
    }
    /**
     * Get choices.
     *
     * @return array
     */
    public function getChoices()
    {
    }
}
