<?php

namespace PrestaShop\PrestaShop\Core\Addon;

class AddonListFilter
{
    /**
     * @var int AddonListFilterType Specify the addon type like theme only or module only or all
     */
    public $type = \PrestaShop\PrestaShop\Core\Addon\AddonListFilterType::ALL;
    /**
     * @var int AddonListFilterStatus Specify if you want enabled only, disabled only or all addons
     */
    public $status = \PrestaShop\PrestaShop\Core\Addon\AddonListFilterStatus::ALL;
    /**
     * @var int AddonListFilterOrigin Specify if you want an addon from a specific source
     */
    public $origin = \PrestaShop\PrestaShop\Core\Addon\AddonListFilterOrigin::ALL;
    /**
     * @var array Names of all the addons to exclude from result
     */
    public $exclude = [];
    /**
     * @param int $origin
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function addOrigin($origin)
    {
    }
    /**
     * @param int $status
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function addStatus($status)
    {
    }
    /**
     * @param int $type
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function addType($type)
    {
    }
    /**
     * @param int $origin
     *
     * @return bool
     */
    public function hasOrigin($origin)
    {
    }
    /**
     * @param int $status
     *
     * @return bool
     */
    public function hasStatus($status)
    {
    }
    /**
     * @param int $type
     *
     * @return bool
     */
    public function hasType($type)
    {
    }
    /**
     * @param int $origin
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function removeOrigin($origin)
    {
    }
    /**
     * @param int $status
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function removeStatus($status)
    {
    }
    /**
     * @param int $type
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function removeType($type)
    {
    }
    /**
     * @param int $origin
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function setOrigin($origin)
    {
    }
    /**
     * @param int $type
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function setType($type)
    {
    }
    /**
     * @param int $status
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\AddonListFilter
     */
    public function setStatus($status)
    {
    }
    public function setExclude(array $exclude)
    {
    }
}
