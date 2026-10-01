<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate;

/**
 * Class MailTheme basic immutable implementation of MailThemeInterface.
 */
class Theme implements \PrestaShop\PrestaShop\Core\MailTemplate\ThemeInterface
{
    /**
     * @param string $name
     */
    public function __construct($name)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutCollectionInterface
     */
    public function getLayouts()
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutCollectionInterface $layouts
     *
     * @return $this
     */
    public function setLayouts($layouts)
    {
    }
}
