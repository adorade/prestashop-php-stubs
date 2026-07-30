<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier;

/**
 * This class will provide data from DB / ORM about Category.
 */
class CarrierDataProvider
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * Get all carriers in a given language.
     *
     * @param int $id_lang Language id
     * @param bool $active Returns only active carriers when true
     * @param bool $delete
     * @param bool|int $id_zone
     * @param string|null $ids_group
     * @param int $modules_filters Possible values:
     *                             - PS_CARRIERS_ONLY
     *                             - CARRIERS_MODULE
     *                             - CARRIERS_MODULE_NEED_RANGE
     *                             - PS_CARRIERS_AND_CARRIER_MODULES_NEED_RANGE
     *                             - ALL_CARRIERS
     *
     * @return array Carriers
     */
    public function getCarriers($id_lang, $active = false, $delete = false, $id_zone = false, $ids_group = null, $modules_filters = \Carrier::PS_CARRIERS_ONLY)
    {
    }
    /**
     * Get all active carriers in given language, usable for choice form type.
     *
     * @param int|null $languageId if not provided - will use the default language
     *
     * @return array carrier choices
     */
    public function getActiveCarriersChoices($languageId = null)
    {
    }
    /**
     * Get carriers order by choices.
     *
     * @return array order by choices
     */
    public function getOrderByChoices()
    {
    }
    /**
     * Get carriers order way choices.
     *
     * @return array order way choices
     */
    public function getOrderWayChoices()
    {
    }
    /**
     * Get the CarrierCore class ALL_CARRIERS constant value.
     *
     * @return int
     */
    public function getAllCarriersConstant()
    {
    }
}
