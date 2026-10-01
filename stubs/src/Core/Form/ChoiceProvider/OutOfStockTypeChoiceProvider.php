<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides form choices for "when product is out of stock" behavior
 */
final class OutOfStockTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param bool $outOfStockProductOrderingAvailableByDefault
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, bool $outOfStockProductOrderingAvailableByDefault)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
