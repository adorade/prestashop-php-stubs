<?php

namespace PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider;

/**
 * Provides choices for customer groups
 */
final class GroupByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param int $contextLangId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, $contextLangId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
