<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

final class PackStockTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     * @param int $defaultPackStockType
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, int $defaultPackStockType)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getChoices()
    {
    }
}
