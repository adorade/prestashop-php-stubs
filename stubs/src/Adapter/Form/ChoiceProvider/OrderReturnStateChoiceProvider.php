<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

class OrderReturnStateChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param int $contextLangId
     */
    public function __construct(int $contextLangId)
    {
    }
    /**
     * Get available order return states.
     *
     * @return array
     *
     * @throws OrderReturnStateException
     */
    public function getChoices(): array
    {
    }
}
