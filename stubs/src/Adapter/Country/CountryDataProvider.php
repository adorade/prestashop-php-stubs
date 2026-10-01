<?php

namespace PrestaShop\PrestaShop\Adapter\Country;

/**
 * This class will provide data from DB / ORM about Country
 */
class CountryDataProvider
{
    /**
     * Return available countries.
     *
     * @param int $id_lang Language ID
     * @param bool $active return only active coutries
     * @param bool $contain_states return only country with states
     * @param bool $list_states Include the states list with the returned list
     *
     * @return array Countries and corresponding zones
     */
    public function getCountries($id_lang, $active = false, $contain_states = false, $list_states = true)
    {
    }
    /**
     * Returns list of countries IDs which need DNI
     *
     * @return array
     */
    public function getCountriesIdWhichNeedDni()
    {
    }
    /**
     * Returns list of countries IDs which need Postcode
     *
     * @return array
     *
     * @throws \PrestaShopDatabaseException
     */
    public function getCountriesIdWhichNeedPostcode()
    {
    }
    /**
     * Returns list of countries IDS which need a state
     *
     * @return array
     *
     * @throws \PrestaShopDatabaseException
     */
    public function getCountriesIdWhichNeedState()
    {
    }
    /**
     * Get Country IsoCode by Id.
     *
     * @param int $id Country Id
     *
     * @return string the related iso code
     */
    public function getIsoCodebyId($id = null)
    {
    }
    /**
     * Get country Id by ISO code.
     *
     * @param string $isoCode Country ISO code
     *
     * @return int
     */
    public function getIdByIsoCode($isoCode)
    {
    }
}
