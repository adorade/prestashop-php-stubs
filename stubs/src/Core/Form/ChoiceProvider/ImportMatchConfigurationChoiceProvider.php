<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ImportMatchConfigurationChoiceProvider is responsible for providing choices
 * in Advanced parameters -> Import -> Step 2 -> Load a data matching configuration.
 */
final class ImportMatchConfigurationChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param array $matchConfigurations
     */
    public function __construct(array $matchConfigurations)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
