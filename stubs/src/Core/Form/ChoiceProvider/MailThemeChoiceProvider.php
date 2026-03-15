<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class MailThemeChoiceProvider is responsible to provide a list of available mail themes.
 */
class MailThemeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param ThemeCatalogInterface $themeCatalog
     */
    public function __construct(\PrestaShop\PrestaShop\Core\MailTemplate\ThemeCatalogInterface $themeCatalog)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
