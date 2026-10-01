<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Selects order messages itself.
 */
final class CustomerServiceOrderMessagesChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderMessage\OrderMessageProvider $orderMessageProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices(array $options): array
    {
    }
}
