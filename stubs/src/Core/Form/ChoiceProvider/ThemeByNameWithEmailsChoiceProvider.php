<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ThemeByNameChoiceProvider provides theme choices with name values, but it
 * filters themes which haven't overridden any email templates.
 */
final class ThemeByNameWithEmailsChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param ThemeCollection $themeCollection
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\ThemeCollection $themeCollection)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
