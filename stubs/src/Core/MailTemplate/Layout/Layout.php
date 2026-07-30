<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Layout;

/**
 * Class MailLayout is the default implementation of MailLayoutInterface,
 * it is a simple immutable data container with no logic. It contains the
 * basic info about a mail layout which is used to generate a MailTemplate.
 */
class Layout implements \PrestaShop\PrestaShop\Core\MailTemplate\Layout\LayoutInterface
{
    /**
     * @param string $name Name of the layout to describe its purpose
     * @param string $htmlPath Absolute path of the html layout file
     * @param string $txtPath Absolute path of the txt layout file
     * @param string $moduleName Which module this layout is associated to (if any)
     */
    public function __construct($name, $htmlPath, $txtPath, $moduleName = '')
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getHtmlPath()
    {
    }
    /**
     * @return string
     */
    public function getTxtPath()
    {
    }
    /**
     * @return string
     */
    public function getModuleName()
    {
    }
}
