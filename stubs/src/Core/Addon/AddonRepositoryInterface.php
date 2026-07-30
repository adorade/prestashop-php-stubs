<?php

namespace PrestaShop\PrestaShop\Core\Addon;

interface AddonRepositoryInterface
{
    /**
     * @param string $name theme name
     *
     * @return AddonInterface the theme or module
     */
    public function getInstanceByName($name);
    /**
     * @param AddonListFilter $filter
     *
     * @return AddonInterface[] retrieve a list of addons, regarding the $filter used
     */
    public function getFilteredList(\PrestaShop\PrestaShop\Core\Addon\AddonListFilter $filter);
    /**
     * @return AddonInterface[] retrieve a list of addons, regardless any $filter
     */
    public function getList();
}
