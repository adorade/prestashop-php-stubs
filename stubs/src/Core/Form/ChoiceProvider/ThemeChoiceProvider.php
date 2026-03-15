<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ThemeChoiceProvider provides available themes as choices.
 */
final class ThemeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param ThemeProviderInterface $themeProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeProviderInterface $themeProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
