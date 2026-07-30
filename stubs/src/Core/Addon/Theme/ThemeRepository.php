<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

class ThemeRepository implements \PrestaShop\PrestaShop\Core\Addon\AddonRepositoryInterface
{
    /**
     * @var array|null
     */
    public $themes;
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \Symfony\Component\Filesystem\Filesystem $filesystem, \Shop $shop = null)
    {
    }
    /**
     * @param string $name
     *
     * @return Theme
     *
     * @throws PrestaShopException
     */
    public function getInstanceByName($name)
    {
    }
    public function getList()
    {
    }
    /**
     * Gets list of themes as a collection.
     *
     * @return ThemeCollection
     */
    public function getListAsCollection()
    {
    }
    public function getListExcluding(array $exclude)
    {
    }
    public function getFilteredList(\PrestaShop\PrestaShop\Core\Addon\AddonListFilter $filter)
    {
    }
}
