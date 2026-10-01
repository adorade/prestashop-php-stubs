<?php

namespace PrestaShop\PrestaShop\Core\Product;

class ProductAdminDrawer implements \PrestaShopBundle\Service\Hook\HookContentClassInterface
{
    /**
     * Material icon reference to display above the title.
     *
     * @var string
     */
    protected $icon;
    /**
     * ID suffix to add in the generated DOM element.
     *
     * @var string
     */
    protected $id;
    /**
     * Destination of the link.
     *
     * @var string
     */
    protected $link;
    /**
     * Title of the button. Should be short.
     *
     * @var string
     */
    protected $title;
    public function __construct(array $data = [])
    {
    }
    public function getIcon()
    {
    }
    public function getId()
    {
    }
    public function getLink()
    {
    }
    public function getTitle()
    {
    }
    public function setIcon($icon)
    {
    }
    public function setId($id)
    {
    }
    public function setLink($link)
    {
    }
    public function setTitle($title)
    {
    }
    public function toArray()
    {
    }
}
