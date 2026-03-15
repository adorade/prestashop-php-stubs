<?php

class LocalizationPackCore
{
    public $name;
    public $version;
    protected $iso_code_lang;
    protected $iso_currency;
    protected $_errors = [];
    /**
     * Loads localization pack.
     *
     * @param SimpleXMLElement|string $pack Localization pack as SimpleXMLElement or plain XML string
     * @param array $selection Content to import selection
     * @param bool $install_mode Whether mode is installation or not
     * @param string|null $iso_localization_pack Country Alpha-2 ISO code
     *
     * @return bool
     */
    public function loadLocalisationPack($pack, $selection, $install_mode = \false, $iso_localization_pack = \null)
    {
    }
    /**
     * @param SimpleXMLElement $xml
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    protected function _installStates($xml)
    {
    }
    /**
     * @param SimpleXMLElement $xml
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    protected function _installTaxes($xml)
    {
    }
    /**
     * @param SimpleXMLElement $xml
     * @param bool $install_mode
     *
     * @return bool
     *
     * @throws PrestaShopException
     */
    protected function _installCurrencies($xml, $install_mode = \false)
    {
    }
    /**
     * @return LocaleRepository
     *
     * @throws Exception
     */
    protected function getCldrLocaleRepository()
    {
    }
    /**
     * @param SimpleXMLElement $xml
     * @param bool $install_mode
     *
     * @return bool
     */
    protected function _installLanguages($xml, $install_mode = \false)
    {
    }
    /**
     * This method aims to update localized data in currencies from CLDR reference.
     * Eg currency symbol used depends on language, so it has to be updated when adding a new language
     * Use-case: adding a new language should trigger all currencies update
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     * @throws \PrestaShop\PrestaShop\Core\Localization\Exception\LocalizationException
     */
    protected function refreshLocalizedCurrenciesData()
    {
    }
    /**
     * @param SimpleXMLElement $xml
     *
     * @return bool
     */
    protected function _installUnits($xml)
    {
    }
    /**
     * Install/Uninstall a module from a localization file
     * <modules>
     *     <module name="module_name" [install="0|1"] />.
     *
     * @param SimpleXMLElement $xml
     *
     * @return bool
     */
    protected function installModules($xml)
    {
    }
    /**
     * Update a configuration variable from a localization file
     * <configuration>
     * <configuration name="variable_name" value="variable_value" />.
     *
     * @param SimpleXMLElement $xml
     *
     * @return bool
     */
    protected function installConfiguration($xml)
    {
    }
    /**
     * @param SimpleXMLElement $xml
     *
     * @return bool
     */
    protected function _installGroups($xml)
    {
    }
    /**
     * @param SimpleXMLElement $xml
     *
     * @return bool
     */
    protected function updateDefaultGroupDisplayMethod($xml)
    {
    }
    public function getErrors()
    {
    }
}
