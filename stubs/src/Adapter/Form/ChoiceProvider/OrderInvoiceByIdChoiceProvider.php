<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

final class OrderInvoiceByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param LocaleInterface $locale
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices(array $options): array
    {
    }
}
