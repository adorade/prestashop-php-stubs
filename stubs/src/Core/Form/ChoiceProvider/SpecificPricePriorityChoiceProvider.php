<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

class SpecificPricePriorityChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @return array<string, string>
     */
    public function getChoices(): array
    {
    }
}
