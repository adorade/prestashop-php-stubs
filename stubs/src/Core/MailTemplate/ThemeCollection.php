<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Class MailThemeCollection is a collection of MailThemeInterface elements.
 */
class ThemeCollection extends \PrestaShop\PrestaShop\Core\Data\AbstractTypedCollection implements \PrestaShop\PrestaShop\Core\MailTemplate\ThemeCollectionInterface
{
    /**
     * {@inheritdoc}
     */
    protected function getType()
    {
    }
    /**
     * @param string $themeName
     *
     * @return ThemeInterface|null
     */
    public function getByName($themeName)
    {
    }
}
