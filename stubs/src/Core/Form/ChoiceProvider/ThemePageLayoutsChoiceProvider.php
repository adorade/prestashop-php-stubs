<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ThemePageLayoutsChoiceProvider proves page layout choices for given theme.
 */
final class ThemePageLayoutsChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param Theme $theme
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
