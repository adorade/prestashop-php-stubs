<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ModuleByNameChoiceProvider provides module choices with name values.
 */
final class ModuleByNameChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param ModuleCollection $installedModules
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $installedModules)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
